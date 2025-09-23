<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryPartner;
use App\Http\Controllers\Controller;

class CategoryPartnerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryPartner::withCount('partners')->paginate(9);
        return view('admin.category-partner.index', compact('categories'));
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
            'name' => 'required|string|max:255',
        ]);

        CategoryPartner::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('category-partner.index')->with('success', 'Category berhasil dibuat.');
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
    public function update(Request $request, $id)
    {
        $category = CategoryPartner::findOrFail($id);

        $request->validate([
            'edit_name' => 'required',
        ]);

        $category->update([
            'name' => $request->edit_name,
            'slug' => Str::slug($request->edit_name),
        ]);


        return redirect()->route('category-partner.index')->with('success', 'Category berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = CategoryPartner::findOrFail($id);
        $category->delete();
        return redirect()->route('category-partner.index')->with('success', 'Category berhasil dihapus.');
    }

    public function toggleStatus(CategoryPartner $category)
    {
        $category->status = !$category->status;
        $category->save();

        return redirect()->route('category-partner.index')->with('success', 'Status kategori berhasil diubah.');
    }
}
