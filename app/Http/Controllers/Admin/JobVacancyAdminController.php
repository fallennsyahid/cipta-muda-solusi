<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Enums\JobType;
use App\Models\Applicant;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

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
            'contract_duration' => 'nullable|string',
            'salary' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'skills' => 'required|array|min:3|max:5',
            'skills.*' => 'nullable|string|max:50',
            'status' => ['required', Rule::in(Status::onlyActiveNonActive())],
        ]);

        $validated['skills'] = array_values(array_filter(
            $validated['skills'],
            fn($value) => !is_null($value) && $value !== ''
        ));

        try {
            JobVacancy::create($validated);

            return redirect()->route('jobs.index')->with('success', 'Lowongan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, coba lagi..');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(JobVacancy $job)
    {
        $applicants =  $job->applicants()->latest()->get();
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
            'position' => ['sometimes', 'string', 'max:100'],
            'departement' => ['sometimes', 'string', 'max:100'],
            'location' => ['sometimes', 'string', 'max:100'],
            'job_type' => ['sometimes', Rule::in(JobType::values())],
            'salary' => ['sometimes', 'string', 'max:50'],
            'description' => ['sometimes', 'string', 'max:250'],
            'skills' => ['sometimes', 'array', 'min:3', 'max:5'],
            'skills.*' => ['nullable', 'string', 'max:50'],
            'status' => ['sometimes', Rule::in(Status::values())],
        ]);

        $validated['skills'] = array_values(array_filter($validated['skills'], function ($skill) {
            return !is_null($skill) && trim($skill) !== '';
        }));

        if (count($validated['skills']) < 3) {
            return back()->withErrors(['skills' => 'Minimal 3 skill harus diisi.'])->withInput();
        }

        $job->update($validated);

        return redirect()->route('jobs.index')->with('success', 'Data berhasil diupate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobVacancy $job)
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Data berhasil dihapus!');
    }
}
