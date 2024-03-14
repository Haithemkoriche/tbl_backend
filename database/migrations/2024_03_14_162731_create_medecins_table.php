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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('created_by')->nullable();
            $table->string('address')->nullable();
            $table->boolean('annu');
            $table->float('average_rate')->default(4.5);
            $table->boolean('email_verified')->default(false);
            $table->string('etab')->nullable();
            $table->string('full_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('speciality')->nullable();
            $table->string('speciality_full')->nullable();
            $table->boolean('status')->default(false);
            $table->string('wilaya_full')->nullable();
            $table->string('wilaya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecins');
    }
};
