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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('Created By')->nullable();
            $table->string('ADDRESS')->nullable();
            $table->string('B DAY')->nullable();
            $table->boolean('EMAIL VERIFY')->default(false);
            $table->string('F NAME')->nullable();
            $table->string('FULL NAME');
            $table->string('GENDER')->nullable();
            $table->string('groupSangin')->nullable();
            $table->string('L NAME')->nullable();
            $table->string('PHONE')->nullable();
            $table->boolean('PHONE VERIFY')->default(false);
            $table->integer('POID')->nullable();
            $table->integer('TAILS')->nullable();
            $table->string('USER')->nullable();
            $table->string('WILAYA')->nullable();
            $table->string('email')->nullable();
            $table->boolean('IsParent')->default(false);
            $table->string('NameAndRelation')->nullable();
            $table->string('parent')->nullable();
            $table->boolean('Alcool')->default(false);
            $table->json('medFavs')->nullable();
            $table->string('RELATION')->nullable();
            $table->boolean('Tabac')->default(false);
            $table->string('TYPE')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
