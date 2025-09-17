<?php

namespace App\Observers;

use App\Models\ActivityLog;
use App\Models\JobVacancy;

class JobsObserver
{
    /**
     * Handle the Jobs "created" event.
     */
    public function created(JobVacancy $jobs)
    {
        ActivityLog::create([
            'action' => 'create',
            'target_type' => 'Job',
            'target_name' => $job->title ?? $jobs->position,
            'changes' => [
                'new' => $jobs->only(['title', 'department', 'location', 'job_type', 'salary', 'description']),
            ],
        ]);
    }

    /**
     * Handle the Jobs "updated" event.
     */
    public function updated(JobVacancy $jobs)
    {
        $old = collect($jobs->getOriginal())->only(['title', 'department', 'location', 'job_type', 'salary', 'description']);
        $new = collect($jobs->getAttributes())->only(['title', 'department', 'location', 'job_type', 'salary', 'description']);

        if (isset($old['description'])) $old['description'] = substr(strip_tags($old['description']), 0, 120) . '...';
        if (isset($new['description'])) $new['description'] = substr(strip_tags($new['description']), 0, 120) . '...';

        ActivityLog::create([
            'action' => 'update',
            'target_type' => 'Job',
            'target_name' => $jobs->title ?? $jobs->position,
            'changes' => [
                'old' => $old,
                'new' => $new,
            ],
        ]);
    }

    /**
     * Handle the Jobs "deleted" event.
     */
    public function deleted(JobVacancy $jobs): void
    {
        ActivityLog::create([
            'action' => 'delete',
            'target_type' => 'Job',
            'target_name' => $jobs->title ?? $jobs->position,
        ]);
    }

    /**
     * Handle the Jobs "restored" event.
     */
    public function restored(JobVacancy $jobs): void
    {
        //
    }

    /**
     * Handle the Jobs "force deleted" event.
     */
    public function forceDeleted(JobVacancy $jobs): void
    {
        //
    }
}
