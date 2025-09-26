<?php

namespace App\Http\Controllers\Admin;

use Mews\Purifier\Facades\Purifier;
use App\Enums\BlogStatus;
use App\Enums\Status;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $blogs = Blog::with('user')->orderByDesc('is_featured')->latest()->paginate(5);
        $blogsTotal = Blog::count();
        $blogStatus = BlogStatus::cases();
        $blogsPublished = Blog::where('status', BlogStatus::Published->value)->count();
        $blogsPending = Blog::where('status', BlogStatus::Pending->value)->count();
        $blogsArchived = Blog::where('status', BlogStatus::Archived->value)->count();

        $notifications = $user->unreadNotifications;

        return view('admin.blogs.index', compact('blogs', 'blogsTotal', 'blogStatus', 'blogsPublished', 'blogsPending', 'blogsArchived', 'notifications'));
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
            'author' => $user->name,
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
        $blog = Blog::with('user')->findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
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

    public function approve($id)
    {
        $auth = Auth::user();

        $blog = Blog::where('id', $id)->where('status', Status::Pending->value)->firstOrFail();

        $blog->update([
            'status' => Status::Published->value,
        ]);

        $auth->unreadNotifications()->where('data->blog_id', $id)->update(['read_at' => now()]);


        return back()->with('success', 'Blog berhasil dipublish');
    }
}
