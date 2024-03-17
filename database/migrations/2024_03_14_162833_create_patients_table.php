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
            // $table->id();
            $table->text('ADDRESS')->nullable();
            $table->enum('Alcool', ['oui', 'non'])->nullable();
            $table->text('Allergies')->nullable(); // Consider using JSON or TEXT for arrays
            $table->text('Antécédent chirurgical')->nullable();
            $table->text('Antécédent chronique')->nullable();
            $table->text('Antécédents familiaux')->nullable();
            $table->string('B DAY')->nullable(); // Keeping as string to maintain format
            $table->string('email')->nullable();
            $table->enum('EMAIL VERIFY', ['oui', 'non'])->nullable();
            $table->string('F NAME')->nullable();
            $table->string('FULL NAME')->nullable();
            $table->string('GENDER')->nullable();
            $table->string('groupSangin')->nullable();
            $table->enum('IsParent', ['oui', 'non'])->nullable();
            $table->string('L NAME')->nullable();
            $table->string('LANG')->nullable();
            $table->text('medFav')->nullable(); // Consider using JSON or TEXT for arrays
            $table->text('medFavs')->nullable(); // Consider using JSON or TEXT for arrays
            $table->text('NameAndRelation')->nullable(); // Consider using JSON or TEXT for arrays
            $table->string('parent')->nullable();
            $table->string('PHONE')->nullable();
            $table->enum('PHONE VERIFY', ['oui', 'non'])->nullable();
            $table->float('POID')->nullable();
            $table->string('RDV')->nullable(); // Consider using JSON or TEXT for arrays
            $table->string('RELATION')->nullable();
            $table->string('STATUS')->nullable();
            $table->enum('Tabac', ['oui', 'non'])->nullable();
            $table->float('TAILS')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('USER')->nullable();
            $table->string('WILAYA')->nullable();
            $table->string('Creation Date')->nullable(); // Keeping as string to maintain format
            $table->string('Modified Date')->nullable(); // Keeping as string to maintain format
            $table->string('Slug')->nullable();
            $table->string('Creator')->nullable();
            $table->string('unique id')->nullable();
            // $table->timestamps();
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
