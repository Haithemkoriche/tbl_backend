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
            // $table->id();
            $table->string('ADDRESS')->nullable();
            $table->enum('annu', ['oui', 'non'])->default('non')->nullable();
            $table->float('avrage_rate')->default(4.5)->nullable();
            $table->string('Bday')->nullable();
            $table->string('CliniquesDispo')->nullable();
            $table->string('color')->nullable();
            $table->string('disponibility')->nullable();
            $table->enum('EMAIL VERIFY', ['oui', 'non'])->default('non')->nullable();
            $table->string('etab')->nullable();
            $table->string('expertise')->nullable();
            $table->string('FirstName')->nullable();
            $table->string('FULL NAME')->nullable();
            $table->string('Gender')->nullable();
            $table->string('langs')->nullable();
            $table->string('Langues de Consultation')->nullable();
            $table->string('LastName')->nullable();
            $table->string('list_patie')->nullable();
            $table->string('list_patients')->nullable();
            $table->string('list_patientsss')->nullable();
            $table->string('MOTIFS')->nullable();
            $table->integer('number_rate')->nullable();
            $table->integer('numConsultation')->nullable();
            $table->integer('PHONE')->nullable();
            $table->string('PHOTO')->nullable();
            $table->text('Presentation')->nullable();
            $table->string('roll')->nullable();
            $table->string('signature')->nullable();
            $table->string('specialities')->nullable();
            $table->string('specialities_full')->nullable();
            $table->string('speciality')->nullable();
            $table->string('speciality_full')->nullable();
            $table->enum('STATUS', ['oui', 'non'])->default('non')->nullable();
            $table->string('TIMESLOT')->nullable();
            $table->string('USER')->nullable();
            $table->string('Wilaya')->nullable();
            $table->string('Wilaya_full')->nullable();
            $table->string('creation_date')->nullable();
            $table->string('modified_date')->nullable();
            $table->string('slug')->nullable();
            $table->string('creator')->nullable();
            $table->string('unique_id')->unique()->nullable();
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
