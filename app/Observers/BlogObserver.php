<?php

namespace App\Observers;

use App\Models\ActivityLog;
use App\Models\Blog;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog)
    {
        ActivityLog::create([
            'action' => 'create',
            'target_type' => 'Blog',
            'target_name' => $blog->title,
        ]);
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog)
    {
        $old = collect($blog->getOriginal())->only([
            'title',
            'category',
            'author',
            'description',
            'status',
            'is_featured'
        ]);

        $new = collect($blog->getAttributes())->only([
            'title',
            'category',
            'author',
            'description',
            'status',
            'is_featured'
        ]);

        $old['content'] = substr(strip_tags($blog->getOriginal('content')), 0, 100) . '...';
        $new['content'] = substr(strip_tags($blog->content), 0, 100) . '...';

        ActivityLog::create([
            'action' => 'update',
            'target_type' => 'Blog',
            'target_name' => $blog->title,
            'changes' => [
                'old' => $old,
                'new' => $new,
            ],
        ]);
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog)
    {
        ActivityLog::create([
            'action' => 'delete',
            'target_type' => 'Blog',
            'target_name' => $blog->title,
        ]);
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
