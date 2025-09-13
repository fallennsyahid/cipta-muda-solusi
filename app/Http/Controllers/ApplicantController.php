<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\JobVacancy;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, JobVacancy $job)
    {
        // $validated = $request->validate([
        //     'full_name' => 'required|string',
        //     'email' => 'required|email',
        //     'phone_number' => 'required|string',
        //     'date_of_birth' => 'required|date',
        //     'experience' => 'required|string',
        //     'cover_letter' => 'nullable|string',
        //     'link' => 'nullable|url',
        //     'cv' => 'required|file|mimes:pdf|max:5120',
        // ]);

        // if ($request->hasFile('cv')) {
        //     $validated['cv'] = $request->file('cv')->store('cvs', 'store');
        // }

        // $validated['job_vacancy_id'] = $job->id;

        // Applicant::create($validated);

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
