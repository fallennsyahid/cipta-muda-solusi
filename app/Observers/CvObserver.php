<?php

namespace App\Observers;

use App\Enums\Status;
use App\Models\CvApplicant;
use App\Models\Employee;

class CvObserver
{
    /**
     * Handle the CvApplicant "created" event.
     */
    public function created(CvApplicant $cvApplicant): void
    {
        //
    }

    /**
     * Handle the CvApplicant "updated" event.
     */
    public function updated(CvApplicant $cvApplicant): void
    {
        if ($cvApplicant->isDirty('status') && $cvApplicant->status === Status::Diterima->value) {
            Employee::create([
                'name' => $cvApplicant->applicant_name,
                'email' => $cvApplicant->applicant_email,
                'phone_number' => $cvApplicant->applicant_phone_number,
                'position' => $cvApplicant->note,
                'status' => Status::Active->value,
            ]);
        }
    }

    /**
     * Handle the CvApplicant "deleted" event.
     */
    public function deleted(CvApplicant $cvApplicant): void
    {
        //
    }

    /**
     * Handle the CvApplicant "restored" event.
     */
    public function restored(CvApplicant $cvApplicant): void
    {
        //
    }

    /**
     * Handle the CvApplicant "force deleted" event.
     */
    public function forceDeleted(CvApplicant $cvApplicant): void
    {
        //
    }
}
