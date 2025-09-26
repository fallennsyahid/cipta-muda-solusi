<?php

namespace App\Http\Controllers\AdminBlog;

use App\Models\Blog;
use App\Enums\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $blogsTotal = Blog::where('user_id', $user->id)->count();
        $blogsPublished = Blog::where('user_id', $user->id)->where('status', Status::Published->value)->count();
        $blogsPending = Blog::where('user_id', $user->id)->where('status', Status::Pending->value)->count();
        $blogsArchived = Blog::where('user_id', $user->id)->where('status', Status::UnPublished->value)->count();

        return view('adminBlog.dashboard', compact('blogsTotal', 'blogsPublished', 'blogsPending', 'blogsArchived'));
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
