<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medecins extends Model
{
    use HasFactory;
    protected $fillable = [
        'ADDRESS',
        'annu',
        'avrage_rate',
        'Bday',
        'CliniquesDispo',
        'color',
        'disponibility',
        'EMAIL VERIFY',
        'etab',
        'expertise',
        'FirstName',
        'FULL NAME',
        'Gender',
        'langs',
        'Langues de Consultation',
        'LastName',
        'list_patie',
        'list_patients',
        'list_patientsss',
        'MOTIFS',
        'number_rate',
        'numConsultation',
        'PHONE',
        'PHOTO',
        'Presentation',
        'roll',
        'signature',
        'specialities',
        'specialities_full',
        'speciality',
        'speciality_full',
        'STATUS',
        'TIMESLOT',
        'USER',
        'Wilaya',
        'Wilaya_full',
        'creation_date',
        'modified_date',
        'slug',
        'creator',
        'unique_id'
    ];
    
}
