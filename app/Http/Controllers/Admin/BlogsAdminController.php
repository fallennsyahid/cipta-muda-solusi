<?php

namespace App\Http\Controllers\Admin;

use COM;
use App\Enums\BlogStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Intervention\Image\Colors\Rgb\Channels\Red;

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
        $request->validate([
            'title' => 'nullable',
            'category' => 'nullable',
            'author' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable',
            'content' => 'nullable',
            'status' => 'nullable',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        Blog::create($data);

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
            'title' => $validated['title'],
            'category' => $validated['category'],
            'author' => $validated['author'],
            'image' => $validated['edit_image'],
            'description' => $validated['description'],
            'content' => $validated['content'],
            'status' => $validated['status'],
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
