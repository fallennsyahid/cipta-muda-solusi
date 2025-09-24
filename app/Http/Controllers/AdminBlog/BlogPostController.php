<?php

namespace App\Http\Controllers\AdminBlog;

use App\Models\Blog;
use App\Enums\Status;
use App\Enums\BlogStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\RequestPublishNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $blogs = Blog::where('user_id', $user->id)->latest()->paginate(5);
        $blogsTotal = Blog::where('user_id', $user->id)->count();
        $blogsPublished = Blog::where('user_id', $user->id)->where('status', Status::Published->value)->count();
        $blogsPending = Blog::where('user_id', $user->id)->where('status', Status::Pending->value)->count();
        $blogsArchived = Blog::where('user_id', $user->id)->where('status', Status::UnPublished->value)->count();

        return view('adminBlog.Blog-AdminBlog.index', compact('blogs', 'blogsTotal', 'blogsPublished', 'blogsPending', 'blogsArchived'));
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
            'author' => $user->role === 'admin' ? 'Admin' : $user->name,
            'image' => $validated['image'],
            'description' => $validated['description'],
            'content' => $validated['content_create'],
            'status' => Status::Pending->value,
            'user_id' => $user->id,
        ]);

        return redirect()->route('adminBlog.index')->with('success', 'Blog berhasil dibuat!');
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
        $auth = Auth::user();

        $validated = $request->validate([
            'title' => 'nullable',
            'category' => 'nullable',
            'edit_image' => 'nullable',
            'description' => 'nullable',
            'content' => 'nullable',
        ]);

        $blog = Blog::where('id', $id)->where('user_id', $auth->id)->firstOrFail();

        $imagePath = $blog->image;

        if ($request->hasFile('edit_image')) {
            if ($blog->image && Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }

            $imagePath = $request->file('edit_image')->store('blogs', 'public');
        }

        $blog->update([
            'title' =>  $validated['title'],
            'category' => $validated['category'],
            'image' => $imagePath,
            'description' => $validated['description'],
            'content' => $validated['content'],
            'author' => $auth->id,
        ]);

        return redirect()->route('adminBlog.index')->with('success', 'Blog berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $auth = Auth::user();

        $blog = Blog::where('id', $id)->where('user_id', $auth->id)->firstOrFail();
        $blog->delete();

        return redirect()->route('adminBlog.index')->with('success', 'Blog berhasil dihapus.');
    }

    public function toggleFeatured($id)
    {
        $auth = Auth::user();

        $blog = Blog::where('id', $id)
            ->where('user_id', $auth->id) // cuma bisa blog yang dia buat
            ->firstOrFail();

        $blog->is_featured = !$blog->is_featured;
        $blog->save();

        return redirect()->back()->with('success', 'Featured status diupdate!');
    }

    public function requestPublish($id)
    {
        $auth = Auth::user();

        $blog = Blog::where('id', $id)->where('user_id', $auth->id)->where('status', Status::Pending->value)->firstOrFail();

        $mainAdmin = User::where('role', 'admin')->first();
        $mainAdmin->notify(new RequestPublishNotification($blog));

        return back()->with('success', 'Permintaan sudah terkirim.');
    }
}
