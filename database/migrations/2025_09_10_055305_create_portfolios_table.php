<?php

use App\Enums\CategoryPortfolio;
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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('project_name');
            $table->enum('category', CategoryPortfolio::values());
            $table->string('other_category')->nullable();
            $table->string('image');
            $table->text('description');
            $table->json('tools');
            $table->enum('status', Status::onlyPublishedUnPublished())->default(Status::Pending->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
