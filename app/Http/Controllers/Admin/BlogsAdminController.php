<?php

namespace App\Http\Controllers\Admin;

use COM;
use Mews\Purifier\Facades\Purifier;
use App\Enums\BlogStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
        $blogsTotal = Blog::count();
        $blogStatus = BlogStatus::cases();
        $blogsPublished = Blog::where('status', BlogStatus::Published->value)->count();
        $blogsPending = Blog::where('status', BlogStatus::Pending->value)->count();
        $blogsArchived = Blog::where('status', BlogStatus::Archived->value)->count();
        return view('admin.blogs.index', compact('blogs', 'blogsTotal', 'blogStatus', 'blogsPublished', 'blogsPending', 'blogsArchived'));
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
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'nullable',
            'category' => 'required',
            'author' => 'nullable',
            'edit_image' => 'nullable',
            'description' => 'nullable',
            'content' => 'nullable',
            'status' => 'nullable',
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('edit_image')) {
            $validated['edit_image'] = $request->file('edit_image')->store('blogs', 'public');
        }

        $blog->update([
            'title' => $validated['title'] ?? $blog->title,
            'category' => $validated['category'] ?? $blog->category,
            'author' => $validated['author'] ?? $blog->author,
            'image' => $validated['edit_image'] ?? $blog->image,
            'description' => $validated['description'] ?? $blog->description,
            'content' => $validated['content'] ?? $blog->content,
            'status' => $validated['status'] ?? $blog->status,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus!');
    }

    public function toggleFeatured($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_featured = !$blog->is_featured;
        $blog->save();

        return back()->with('success', 'Featured status diupdate!');
    }
}
