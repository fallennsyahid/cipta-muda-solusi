<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Blog;
use App\Enums\Status;
use App\Models\Partner;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalJobs = JobVacancy::count();
        $totalActivePartners = Partner::where('status', Status::Active->value)->count();
        $totalBlogPublished = Blog::where('status', Status::Published->value)->count();
        $totalFaqs = Faq::count();
        return view('admin.dashboard', compact('totalJobs', 'totalActivePartners', 'totalBlogPublished', 'totalFaqs'));
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
        //
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
