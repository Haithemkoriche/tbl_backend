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
            $table->string('ADDRESS');
            $table->boolean('annu');
            $table->float('avrage_rate')->default(4.5);
            $table->date('Bday');
            $table->string('CliniquesDispo');
            $table->string('color');
            $table->string('disponibility');
            $table->boolean('EMAIL VERIFY');
            $table->string('etab');
            $table->string('expertise');
            $table->string('FirstName');
            $table->string('FULL NAME');
            $table->string('Gender');
            $table->string('langs');
            $table->string('Langues de Consultation');
            $table->string('LastName');
            $table->string('list_patie');
            $table->string('list_patients');
            $table->string('list_patientsss');
            $table->string('MOTIFS');
            $table->integer('number_rate');
            $table->integer('numConsultation');
            $table->string('PHONE');
            $table->string('PHOTO');
            $table->text('Presentation');
            $table->string('roll');
            $table->string('signature');
            $table->string('specialities');
            $table->string('specialities_full');
            $table->string('speciality');
            $table->string('speciality_full');
            $table->boolean('STATUS');
            $table->string('TIMESLOT');
            $table->string('USER');
            $table->string('Wilaya');
            $table->string('Wilaya_full');
            $table->dateTime('creation_date');
            $table->dateTime('modified_date');
            $table->string('slug');
            $table->string('creator');
            $table->string('unique_id');
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
