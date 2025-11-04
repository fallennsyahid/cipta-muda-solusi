<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Enums\JobType;
use App\Exports\ApplicantExport;
use App\Models\Applicant;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Exception;
use Maatwebsite\Excel\Facades\Excel;

class JobVacancyAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobVacancy::withCount('applicants')->latest()->paginate(5);
        $jobType = JobType::cases();
        $jobStatus = Status::onlyActiveNonActive();
        $totalJobActive = JobVacancy::where('status', Status::Active->value)->count();
        $totalJobNonActive = JobVacancy::where('status', Status::NonActive->value)->count();
        $totalApplicants = Applicant::count();
        return view('admin.jobs.index', compact('jobs', 'jobType', 'jobStatus', 'totalJobActive', 'totalJobNonActive', 'totalApplicants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'position' => 'required|string|min:5|max:100',
            'departement' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'job_type' => ['required', Rule::in(JobType::values())],
            'contract_duration' => ['nullable', 'required_if:job_type,contract', 'string', 'max:50'],
            'salary' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'skills' => 'required|string',
            'status' => ['required', Rule::in(Status::onlyActiveNonActive())],
        ]);

        // Decode input skills dari JSON Tagify
        $skillsData = json_decode($validated['skills'], true);

        // Pastikan data skill valid
        if (!is_array($skillsData)) {
            return back()->with('error', 'Format skill tidak valid!');
        }

        // Ambil nilai dari setiap tag
        $skills = is_array($skillsData[0] ?? null) ? array_column($skillsData, 'value') : $skillsData;

        $skills = array_map('trim', $skills);
        $skills = array_filter($skills);
        $skills = array_slice($skills, 0, 10);

        // Minimal 3 skill
        if (count($skills) < 3) {
            return back()->with('error', 'Minimal 3 skill dibutuhkan.');
        }

        // Encode ke JSON agar sesuai tipe kolom database
        $validated['skills'] = $skills;

        try {
            JobVacancy::create($validated);
            return redirect()->route('jobs.index')->with('success', 'Lowongan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(JobVacancy $job)
    {
        $applicants =  $job->applicants()->latest()->paginate(5);
        $totalApplicants = $job->applicants()->count();
        $pendingApplicants = $job->applicants()->where('status', Status::Pending->value)->count();
        $acceptApplicants = $job->applicants()->where('status', Status::Diterima->value)->count();
        $deniedApplicants = $job->applicants()->where('status', Status::Ditolak->value)->count();

        return view('admin.jobs.show', compact('job', 'applicants', 'totalApplicants', 'pendingApplicants', 'acceptApplicants', 'deniedApplicants'));
    }

    public function updateStatusApp(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);

        if ($request->status === Status::Diterima->value) {
            $request->validate([
                'position' => 'required|string|max:255',
            ]);
        }

        $applicant->status = $request->status;

        if ($request->has('position')) {
            $applicant->position = $request->position;
        }

        $applicant->save();

        return redirect()->back()->with('success', 'Status Pelamar berhasil diperbarui.');
    }

    public function deleteApplicant(Applicant $applicant)
    {
        $applicant->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobVacancy $job)
    {
        $validated = $request->validate([
            'position' => ['required', 'string', 'max:100'],
            'departement' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:100'],
            'job_type' => ['required', Rule::in(JobType::values())],
            'contract_duration' => ['nullable', 'required_if:job_type,contract', 'string', 'max:50'],
            'salary' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:250'],
            'skills' => ['required', 'string'],
            'status' => ['required', Rule::in(Status::onlyActiveNonActive())],
        ]);

        try {
            $skillsData = json_decode($validated['skills'], true);

            if (!is_array($skillsData)) {
                return back()->with('error', 'Format skill tidak valid!')->withInput();
            }

            $skills = is_array($skillsData[0] ?? null)
                ? array_column($skillsData, 'value')
                : $skillsData;

            $skills = array_map('trim', $skills);
            $skills = array_filter($skills);
            $skills = array_slice($skills, 0, 10);

            if (count($skills) < 3) {
                return back()->with('error', 'Minimal 3 skill dibutuhkan.')->withInput();
            }

            $validated['skills'] = $skills; // kalau kolom di DB pakai JSON cast

            $job->update($validated);

            return redirect()->route('jobs.index')->with('success', 'Lowongan berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobVacancy $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Data berhasil dihapus!');
    }

    public function  export($id)
    {
        $job = JobVacancy::findOrFail($id);

        $fillName = 'Pelamar_' . str_replace(' ', '_', $job->position) . '.xlsx';

        return Excel::download(new ApplicantExport($id), $fillName);
    }
}
