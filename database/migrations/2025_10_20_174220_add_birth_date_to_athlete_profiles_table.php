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
        Schema::table('athlete_profiles', function (Blueprint $table) {
            // Adiciona a coluna birth_date, que pode ser nula, após a coluna user_id
            $table->date('birth_date')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('athlete_profiles', function (Blueprint $table) {
            // Remove a coluna se a migration for revertida
            $table->dropColumn('birth_date');
        });
    }
};