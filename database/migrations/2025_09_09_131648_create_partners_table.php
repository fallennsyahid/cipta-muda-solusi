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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('partner_type', PartnerTypes::values());
            $table->string('partner_other_type')->nullable();
            $table->string('partner_email');
            $table->string('partner_phone_number');
            $table->string('partner_links');
            $table->text('description');
            $table->enum('status', Status::values())->default(Status::Pending->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
