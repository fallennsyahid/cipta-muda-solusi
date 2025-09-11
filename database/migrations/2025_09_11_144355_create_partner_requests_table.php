<?php

use App\Enums\PartnerTypes;
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
        Schema::create('partner_requests', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone_number');
            $table->enum('company_category', PartnerTypes::values());
            $table->string('other_category_company')->nullable();
            $table->text('company_description');
            $table->string('company_link')->nullable();
            $table->string('file_attachments');
            $table->enum('company_status', Status::request());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner_requests');
    }
};
