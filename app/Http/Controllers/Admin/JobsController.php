<?php

namespace App\Http\Controllers\Admin;

use App\Enums\JobType;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::latest()->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = JobType::cases();
        return view('admin.jobs.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => ['required', new Enum(JobType::class)],
            'location' => 'required',
            'photo' => 'required',
        ]);

        $path = $request->file('photo')->store('jobs', 'public');

        Jobs::create([
            'title' => $request->title,
            'type' => $request->type,
            'location' => $request->location,
            'photo' => $path,
        ]);

        return redirect()->route('jobs.index')->with('success', 'Tambah Lowongan Kerja Berhasil');
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
