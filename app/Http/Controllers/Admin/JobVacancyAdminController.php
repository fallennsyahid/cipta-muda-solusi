<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ContactStatus;
use App\Enums\JobType;
use App\Enums\JobStatus;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Intervention\Image\Colors\Rgb\Channels\Red;

class JobVacancyAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobVacancy::latest()->paginate(5);
        $jobType = JobType::cases();
        $jobStatus = JobStatus::cases();
        $totalJobActive = JobVacancy::where('status', JobStatus::Active->value)->count();
        $totalJobNonActive = JobVacancy::where('status', JobStatus::NonActive->value)->count();
        return view('admin.jobs.index', compact('jobs', 'jobType', 'jobStatus', 'totalJobActive', 'totalJobNonActive'));
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
            'salary' => 'required|string|max:50',
            'description' => 'required|string|min:50|max:250',
            'skills' => 'required|array|min:3|max:5',
            'skills.*' => 'nullable|string|max:50',
            'status' => ['required', Rule::in(JobStatus::values())],
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
    public function update(Request $request, JobVacancy $job)
    {
        $validated = $request->validate([
            'position' => ['sometimes', 'string', 'min:5', 'max:100'],
            'departement' => ['sometimes', 'string', 'max:100'],
            'location' => ['sometimes', 'string', 'max:100'],
            'job_type' => ['sometimes', Rule::in(JobType::values())],
            'salary' => ['sometimes', 'string', 'max:50'],
            'description' => ['sometimes', 'string', 'min:50', 'max:250'],
            'skills' => ['sometimes', 'array', 'min:3', 'max:5'],
            'skills.*' => ['nullable', 'string', 'max:50'],
            'status' => ['sometimes', Rule::in(JobStatus::values())],
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
