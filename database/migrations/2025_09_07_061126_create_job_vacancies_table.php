<?php

use App\Enums\Status;
use App\Enums\JobType;
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
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('position', 100);
            $table->string('departement', 100);
            $table->string('location', 100);
            $table->enum('job_type', JobType::values());
            $table->string('salary', 50);
            $table->string('description', 250);
            $table->json('skills');
            $table->enum('status', Status::values())->default(Status::Active->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
