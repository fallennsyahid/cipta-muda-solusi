<?php

namespace App\Observers;

use App\Models\Partner;
use App\Models\ActivityLog;

class PartnerObserver
{
    /**
     * Handle the Partner "created" event.
     */
    public function created(Partner $partner)
    {
        ActivityLog::create([
            'action' => 'create',
            'target_type' => 'Partner',
            'target_name' => $partner->name,
            'changes' => [
                'new' => $partner->only(['name', 'image', 'description']),
            ],
        ]);
    }

    /**
     * Handle the Partner "updated" event.
     */
    public function updated(Partner $partner)
    {
        $old = collect($partner->getOriginal())->only(['name', 'image', 'description']);
        $new = collect($partner->getAttributes())->only(['name', 'image', 'description']);

        if (isset($old['description'])) $old['description'] = substr(strip_tags($old['description']), 0, 120) . '...';
        if (isset($new['description'])) $new['description'] = substr(strip_tags($new['description']), 0, 120) . '...';

        ActivityLog::create([
            'action' => 'update',
            'target_type' => 'Partner',
            'target_name' => $partner->name,
            'changes' => [
                'old' => $old,
                'new' => $new,
            ],
        ]);
    }

    /**
     * Handle the Partner "deleted" event.
     */
    public function deleted(Partner $partner)
    {
        ActivityLog::create([
            'action' => 'delete',
            'target_type' => 'Partner',
            'target_name' => $partner->name,
        ]);
    }

    /**
     * Handle the Partner "restored" event.
     */
    public function restored(Partner $partner): void
    {
        //
    }

    /**
     * Handle the Partner "force deleted" event.
     */
    public function forceDeleted(Partner $partner): void
    {
        //
    }
}
