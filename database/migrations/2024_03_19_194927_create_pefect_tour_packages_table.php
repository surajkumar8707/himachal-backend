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
        Schema::create('pefect_tour_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('images')->nullable();
            $table->integer('persons')->unsigned()->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->text('duration')->nullable();
            $table->text('itinerary')->nullable();
            $table->text('accommodations')->nullable();
            $table->text('meals')->nullable();
            $table->text('transportation')->nullable();
            $table->text('tour_guides')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pefect_tour_packages');
    }
};
