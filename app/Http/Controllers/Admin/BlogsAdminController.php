<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\User;
use App\Enums\Status;
use App\Enums\BlogStatus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Mews\Purifier\Facades\Purifier;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
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

        $notifications = $user->unreadNotifications->filter(function ($notif) {
            return $notif->created_at >= Carbon::now()->subDay();
        });

        return view('admin.blogs.index', compact('blogs', 'blogsTotal', 'blogStatus', 'blogsPublished', 'blogsPending', 'blogsArchived', 'notifications'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $status = $request->get('status');
        $featured = $request->get('is_featured');

        $blogs = Blog::query();

        // 🔍 Search by multiple fields
        if ($query) {
            $blogs->where(function ($qBuilder) use ($query) {
                $qBuilder->where('title', 'like', "%{$query}%")
                    ->orWhere('slug', 'like', "%{$query}%")
                    ->orWhere('category', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            });
        }

        // 📄 Filter status
        if ($status) {
            $blogs->where('status', $status);
        }

        // 🌟 Filter featured
        if ($featured) {
            $blogs->where('is_featured', true);
        }

        // 📅 Urutan: featured dulu baru terbaru
        $blogs->orderByDesc('is_featured')->orderByDesc('created_at');

        $blogs = $blogs->get();

        return view('admin.blogs.partials.blog-list', compact('blogs'));
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
            'category' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5120',
            'description' => 'required',
            'content_create' => 'required',
            'status' => 'required',
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');

            $fileName = time() . '-' . Str::slug(pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME)) . '.webp';

            $path = storage_path('app/public/blogs/' . $fileName);

            $manager = new ImageManager(new Driver());

            $manager->read($imageFile->getRealPath())->toWebp(80)->save($path);

            $validated['image'] = 'blogs/' . $fileName;
        }

        $validated['content'] = Purifier::clean($validated['content_create']);
        $validated['description'] = Purifier::clean($validated['description']);

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

        $auth->unreadNotifications->where('data->blog_id', $id)->update(['read_at' => now()]);


        return back()->with('success', 'Blog berhasil dipublish');
    }
}
