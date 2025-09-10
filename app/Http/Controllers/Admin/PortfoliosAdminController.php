<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryPortfolio;
use App\Enums\Status;
use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PortfoliosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(9);
        $portfolioCategory = CategoryPortfolio::cases();
        $portfolioStatus = Status::onlyPublishedUnPublished();
        // $monthYear = Carbon::parse($portfolios->event_time)->locale('id')->translatedFormat('F Y');
        $categoryColors = [
            'Web Development' => 'bg-blue-500 text-white',
            'Software Development' => 'bg-purple-500 text-white',
            'IT Solution' => 'bg-green-500 text-white',
            'Data Center' => 'bg-gray-700 text-white',
            'Sales & Marketing' => 'bg-yellow-400 text-black',
            'Event Organizer' => 'bg-pink-500 text-white',
            'IT Operation & Maintenance' => 'bg-indigo-600 text-white',
        ];
        return view('admin.portfolios.index', compact('portfolios', 'portfolioCategory', 'portfolioStatus', 'categoryColors'));
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
            'title' => 'required|string',
            'project_name' => 'required|string',
            'category' => ['required', Rule::in(CategoryPortfolio::values())],
            'other_category' => 'nullable|string',
            'image' => 'required|image',
            'description' => 'required',
            'tools' => 'required|array|min:3|max:5',
            'tools.*' => 'nullable|string',
            'status' => ['required', Rule::in(Status::onlyPublishedUnPublished())],
            'event_time' => 'required|date',
        ]);

        $validated['tools'] = array_values(array_filter(
            $validated['tools'],
            fn($value) => !is_null($value) && $value !== ''
        ));

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portfolios', 'public');
        }

        try {
            Portfolio::create($validated);
            return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Data berhasil dihapus!');
    }
}
