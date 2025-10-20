<?php

namespace App\Observers;

use App\Enums\Status;
use App\Models\Applicant;
use App\Models\Employee;

class ApplicantObserver
{
    /**
     * Handle the Applicant "created" event.
     */
    public function created(Applicant $applicant): void
    {
        //
    }

    /**
     * Handle the Applicant "updated" event.
     */
    public function updated(Applicant $applicant): void
    {
        if ($applicant->isDirty('status') && $applicant->status === Status::Diterima->value) {
            Employee::create([
                'name' => $applicant->full_name,
                'email' => $applicant->email,
                'phone_number' => $applicant->phone_number,
                'position' => $applicant->position,
                'employee_image' => $applicant->applicant_picture,
                'status' => Status::Active->value,
            ]);
        }
    }

    /**
     * Handle the Applicant "deleted" event.
     */
    public function deleted(Applicant $applicant): void
    {
        //
    }

    /**
     * Handle the Applicant "restored" event.
     */
    public function restored(Applicant $applicant): void
    {
        //
    }

    /**
     * Handle the Applicant "force deleted" event.
     */
    public function forceDeleted(Applicant $applicant): void
    {
        //
    }
}
