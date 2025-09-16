<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Status;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Enums\CategoryPortfolio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PortfoliosAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(9);
        $totalPortfolios = Portfolio::count();
        $totalPortfoliosPublished = Portfolio::where('status', Status::Published->value)->count();
        $totalPortfoliosUnPublished = Portfolio::where('status', Status::UnPublished->value)->count();
        $portfolioCategory = CategoryPortfolio::cases();
        $totalPortfoliosCategory = Portfolio::distinct('category')->count('category');
        $portfolioStatus = Status::onlyPublishedUnPublished();
        $categoryColors = [
            'Web Development' => 'bg-blue-500 text-white',
            'Software Development' => 'bg-purple-500 text-white',
            'IT Solution' => 'bg-green-500 text-white',
            'Data Center' => 'bg-gray-700 text-white',
            'Sales & Marketing' => 'bg-yellow-400 text-black',
            'Event Organizer' => 'bg-pink-500 text-white',
            'IT Operation & Maintenance' => 'bg-indigo-600 text-white',
        ];
        return view('admin.portfolios.index', compact('portfolios', 'totalPortfolios', 'totalPortfoliosPublished', 'totalPortfoliosUnPublished', 'totalPortfoliosCategory', 'portfolioCategory', 'portfolioStatus', 'categoryColors'));
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
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5120',
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

        $validated['category'] = $request->category;
        $validated['other_category'] = $request->category === CategoryPortfolio::Lainnya->value ? $request->other_category : null;

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
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'other_category' => 'nullable|string',
            'description' => 'required|string|max:250',
            'tools' => 'nullable|array',
            'tools.*' => 'nullable|string|max:100',
            'edit_image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5120',
            'status' => 'required|string',
            'event_time' => 'required|string|max:255',
        ]);

        $portfolio->title = $request->title;
        $portfolio->project_name = $request->project_name;
        $portfolio->category = $request->category;
        $portfolio->other_category = $request->other_category;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;
        $portfolio->event_time = $request->event_time;

        $portfolio->tools = array_filter($request->tools ?? []);

        if ($request->hasFile('edit_image')) {
            if ($portfolio->image && Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }

            $portfolio->image = $request->file('edit_image')->store('portfolios', 'public');
        }

        $portfolio->save();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio berhasil diperbarui!');
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
