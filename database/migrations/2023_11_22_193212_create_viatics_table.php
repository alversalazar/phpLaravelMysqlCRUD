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
        Schema::create('viatics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('place');
            $table->string('description');
            $table->decimal('amount',10,2);
            $table->boolean('status');
            $table->foreignId('idEmployee')->nullable()->constrained('employees')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('idUser')->nullable()->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viatics');
    }
};
