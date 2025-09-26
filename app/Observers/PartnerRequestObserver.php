<?php

namespace App\Observers;

use App\Enums\Status;
use App\Models\Partner;
use App\Models\PartnerRequest;

class PartnerRequestObserver
{
    /**
     * Handle the PartnerRequest "created" event.
     */
    public function created(PartnerRequest $partnerRequest): void
    {
        //
    }

    /**
     * Handle the PartnerRequest "updated" event.
     */
    public function updated(PartnerRequest $partnerRequest): void
    {
        if ($partnerRequest->isDirty('company_status')) {
            if ($partnerRequest->company_status === Status::Diterima->value) {
                Partner::firstOrCreate(
                    ['partner_email' => $partnerRequest->company_email],
                    [
                        'name' => $partnerRequest->company_name,
                        'image' => $partnerRequest->file_attachments,
                        'category_id' => $partnerRequest->company_category,
                        'partner_phone_number' => $partnerRequest->company_phone_number,
                        'partner_links' => $partnerRequest->company_link,
                        'description' => '-',
                        'status' => Status::Active->value,
                    ],
                );
            }
        }
    }

    /**
     * Handle the PartnerRequest "deleted" event.
     */
    public function deleted(PartnerRequest $partnerRequest): void
    {
        //
    }

    /**
     * Handle the PartnerRequest "restored" event.
     */
    public function restored(PartnerRequest $partnerRequest): void
    {
        //
    }

    /**
     * Handle the PartnerRequest "force deleted" event.
     */
    public function forceDeleted(PartnerRequest $partnerRequest): void
    {
        //
    }
}
