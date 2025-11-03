<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Jobs;
use App\Models\Applicant;
use App\Models\Blog;
use App\Models\JobVacancy;
use App\Models\CvApplicant;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalJobs = JobVacancy::where('status', Status::Active->value)->count();

        $search = $request->input('search');
        $filter = $request->input('filter');
        $perPage = 9;

        if ($search) {
            $builder = JobVacancy::search($search);

            if ($filter && $filter !== '-') {
                $builder = $builder->where('departement', $filter);
            }

            $jobs = $builder->paginate($perPage);
        } else {
            $query = JobVacancy::where('status', Status::Active->value);

            if ($filter && $filter !== '-') {
                $query->where('departement', $filter);
            }

            $jobs = $query->latest()->paginate($perPage);
        }

        return view('jobs.index', compact('jobs', 'totalJobs', 'search', 'filter'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');

        $jobs = JobVacancy::query();

        if ($query) {
            $jobs->where(function ($qBuilder) use ($query) {});
        }
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
        $request->validate([
            'applicant_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'applicant_email' => 'required|string',
            'applicant_phone_number' => 'required|string',
            'applicant_file' => 'required|file|mimes:pdf|max:5120',
            'applicant_experience' => 'required|string',
            'applicant_link' => 'required|url',
            'applicant_image' => 'required|image',
        ]);

        $fillPath = null;
        if ($request->hasFile('applicant_file')) {
            $fillPath = $request->file('applicant_file')->store('cv_applicants', 'public');
        }

        $imagePath = null;
        if ($request->hasFile('applicant_image')) {
            $imagePath = $request->file('applicant_image')->store('applicant_image', 'public');
        }

        $phone = preg_replace('/[^0-9+]/', '', $request->applicant_phone_number);

        if (str_starts_with($phone, '0')) {
            $phone = '+62' . substr($phone, 1);
        }

        CvApplicant::create([
            'applicant_name' => $request->applicant_name,
            'date_of_birth' => $request->date_of_birth,
            'applicant_email' => $request->applicant_email,
            'applicant_phone_number' => $phone,
            'applicant_file' => $fillPath,
            'applicant_experience' => $request->applicant_experience,
            'applicant_link' => $request->applicant_link,
            'applicant_image' => $imagePath,
        ]);

        return redirect()->route('user.jobs.index')->with('success', 'CV Berhasil Terkirim');
    }

    public function applicantStore(Request $request, JobVacancy $job)
    {

        $validated = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'date_of_birth' => 'required|date',
            'experience' => 'required|string',
            'cv' => 'required|file|mimes:pdf|max:5120',
            'applicant_picture' => 'required|image',
            'link' => 'required|url',
        ]);

        if ($request->hasFile('cv')) {
            $validated['cv'] = $request->file('cv')->store('cvs', 'public');
        }

        if ($request->hasFile('applicant_picture')) {
            $validated['applicant_picture'] = $request->file('applicant_picture')->store('applicants_picture', 'public');
        }

        $validated['job_vacancy_id'] = $job->id;

        Applicant::create($validated);

        return back()->with('success', 'Lamaran berhasil terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
