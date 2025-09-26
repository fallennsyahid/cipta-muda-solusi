<?php

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
        Schema::table('partner_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('company_category')->change();
            $table->foreign('company_category')->references('id')->on('category_partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_requests', function (Blueprint $table) {
            $table->dropForeign(['company_category']);
            $table->string('company_category')->change();
        });
    }
};
