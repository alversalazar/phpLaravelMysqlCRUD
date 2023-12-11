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
        Schema::create('studyplans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('objetive');
            $table->date('datestart');
            $table->date('datefinal');
            $table->boolean('status');
            $table->foreignId('idCarrer')->nullable()->constrained('carrers')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('idUser')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studyplans');
    }
};
