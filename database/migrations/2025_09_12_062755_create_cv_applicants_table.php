<?php

use App\Enums\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cv_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name');
            $table->date('date_of_birth');
            $table->string('applicant_email');
            $table->string('applicant_phone_number');
            $table->string('applicant_file');
            $table->text('applicant_experience');
            $table->enum('status', Status::request())->default(Status::Pending->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_applicants');
    }
};
