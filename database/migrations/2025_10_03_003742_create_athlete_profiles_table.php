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
        Schema::create('athlete_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('position');
            $table->unsignedInteger('height_cm')->nullable();
            $table->unsignedInteger('weight_kg')->nullable();
            $table->string('dominant_foot')->nullable();
            $table->boolean('passport_eu_bool')->default(false);
            $table->string('federation_status')->nullable();
            $table->boolean('availability_for_trials')->default(true);
            $table->text('bio')->nullable();
            $table->string('current_club')->nullable();
            $table->unsignedInteger('completeness_pct')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athlete_profiles');
    }
};
