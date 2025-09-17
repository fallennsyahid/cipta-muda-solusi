<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Blog;
use App\Enums\Status;
use App\Enums\JobType;
use App\Models\Partner;
use App\Enums\BlogStatus;
use App\Models\JobVacancy;
use App\Enums\PartnerTypes;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;
use App\Models\ActivityLog;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalJobsThisMonth = JobVacancy::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalJobsLastMonth = JobVacancy::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageJobChange = 0;
        if ($totalJobsLastMonth > 0) {
            $percentageJobChange = (($totalJobsThisMonth - $totalJobsLastMonth) / $totalJobsLastMonth) * 100;
        }

        $totalActivePartnersThisMonth = Partner::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalActivePartnersLastMonth = Partner::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageActivePartnersChange = 0;
        if ($totalActivePartnersLastMonth > 0) {
            $percentageActivePartnersChange = (($totalActivePartnersThisMonth - $totalActivePartnersLastMonth) / $totalActivePartnersLastMonth) * 100;
        }

        $totalBlogPublishedThisMonth = Blog::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalBlogPublishedLastMonth = Blog::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageBlogPublishedChange = 0;
        if ($totalBlogPublishedLastMonth > 0) {
            $percentageBlogPublishedChange = (($totalBlogPublishedThisMonth - $totalBlogPublishedLastMonth) / $totalBlogPublishedLastMonth) * 100;
        }

        $totalFaqsThisMonth = Faq::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalFaqsLastMonth = Faq::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageFaqsChange = 0;
        if ($totalFaqsLastMonth) {
            $percentageFaqsChange = (($totalFaqsThisMonth - $totalFaqsLastMonth) / $totalFaqsLastMonth) * 100;
        }

        $jobTypes = JobType::cases();
        $jobStatus = Status::onlyActiveNonActive();

        $partnerTypes = PartnerTypes::cases();
        $partnerStatus = Status::onlyActiveNonActive();

        $blogStatus = BlogStatus::cases();

        $activities = ActivityLog::latest()->take(10)->get();

        return view('admin.dashboard', compact(
            'totalJobsThisMonth',
            'percentageJobChange',
            'totalActivePartnersThisMonth',
            'percentageActivePartnersChange',
            'totalBlogPublishedThisMonth',
            'percentageBlogPublishedChange',
            'totalFaqsThisMonth',
            'percentageFaqsChange',
            'jobTypes',
            'jobStatus',
            'partnerTypes',
            'partnerStatus',
            'blogStatus',
            'activities',
        ));
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

    public function jobCreate(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'position' => 'required|string|min:5|max:100',
            'departement' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'job_type' => ['required', Rule::in(JobType::values())],
            'salary' => 'required|string|max:50',
            'description' => 'required|string|min:50|max:250',
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

            return redirect()->route('dashboard.index')->with('success', 'Lowongan berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan, coba lagi..');
        }
    }

    public function addPartner(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'partner_type' => 'required',
            'partner_other_type' => 'nullable',
            'partner_email' => 'required',
            'partner_phone_number' => 'required',
            'partner_links' => 'nullable',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('partners', 'public');
        }

        try {
            Partner::create($data);
            return redirect()->route('dashboard.index')->with('success', 'Partner berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function createNewBlog(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable',
            'category' => 'nullable',
            'author' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable',
            'content_create' => 'nullable',
            'status' => 'nullable',
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('blogs', 'public');
        }

        $validated['content'] = Purifier::clean($validated['content_create']);

        Blog::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'author' => $validated['author'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'content' => $validated['content_create'],
            'status' => $validated['status'],
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dibuat!');
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
