<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\User;
use App\Enums\Status;
use App\Enums\JobType;
use App\Models\Partner;
use App\Enums\BlogStatus;
use App\Models\JobVacancy;
use App\Enums\PartnerTypes;
use App\Models\ActivityLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    private function calculatePrecentage($thisMonth, $lastMonth)
    {
        if ($lastMonth > 0) {
            if ($thisMonth == 0) {
                return null;
            }
            return (($thisMonth - $lastMonth) / $lastMonth) * 100;
        }
        return null;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalJobsAll = JobVacancy::count();
        $totalJobsThisMonth = JobVacancy::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalJobsLastMonth = JobVacancy::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageJobChange = $this->calculatePrecentage($totalJobsThisMonth, $totalJobsLastMonth);

        $totalActivePartnersAll = Partner::count();
        $totalActivePartnersThisMonth = Partner::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalActivePartnersLastMonth = Partner::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageActivePartnersChange = $this->calculatePrecentage($totalActivePartnersThisMonth, $totalActivePartnersLastMonth);

        $totalBlogPublishedAll = Blog::where('status', BlogStatus::Published->value)->count();
        $totalBlogPublishedThisMonth = Blog::where('status', BlogStatus::Published->value)->whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalBlogPublishedLastMonth = Blog::where('status', BlogStatus::Published->value)->whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageBlogPublishedChange = $this->calculatePrecentage($totalBlogPublishedThisMonth, $totalBlogPublishedLastMonth);

        $totalFaqsAll = Faq::count();
        $totalFaqsThisMonth = Faq::whereMonth('created_at', now()->month)->whereYear('created_at', now()->year)->count();
        $totalFaqsLastMonth = Faq::whereMonth('created_at', now()->subMonth()->month)->whereYear('created_at', now()->subMonth()->year)->count();
        $percentageFaqsChange = $this->calculatePrecentage($totalFaqsThisMonth, $totalFaqsLastMonth);

        $jobTypes = JobType::cases();
        $jobStatus = Status::onlyActiveNonActive();

        $partnerTypes = PartnerTypes::cases();
        $partnerStatus = Status::onlyActiveNonActive();

        $blogStatus = BlogStatus::cases();

        $activities = ActivityLog::latest()->take(10)->get();

        $adminBlogs = User::where('role', 'admin_blog')->withCount([
            'blogs as ready_count' => fn($q) => $q->where('status', BlogStatus::Pending->value),
            'blogs as published_count' => fn($q) => $q->where('status', BlogStatus::Published->value),
        ])->get();

        $sorted = $adminBlogs->sortByDesc('published_count')->values();

        $labels = $sorted->pluck('name');
        $readyCounts = $sorted->pluck('ready_count');
        $publishedCounts = $sorted->pluck('published_count');

        return view('admin.dashboard', compact(
            'totalJobsAll',
            'totalJobsThisMonth',
            'percentageJobChange',
            'totalActivePartnersAll',
            'totalActivePartnersThisMonth',
            'totalBlogPublishedAll',
            'percentageActivePartnersChange',
            'totalBlogPublishedThisMonth',
            'percentageBlogPublishedChange',
            'totalFaqsAll',
            'totalFaqsThisMonth',
            'percentageFaqsChange',
            'jobTypes',
            'jobStatus',
            'partnerTypes',
            'partnerStatus',
            'blogStatus',
            'activities',
            'labels',
            'readyCounts',
            'publishedCounts'
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

        $user = Auth::user();

        Blog::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'author' => $validated['author'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'content' => $validated['content_create'],
            'status' => $validated['status'],
            'user_id' => $user->id,
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
