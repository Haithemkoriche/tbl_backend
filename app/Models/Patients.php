<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'Created By',
        'ADDRESS',
        'B DAY',
        'EMAIL VERIFY',
        'F NAME',
        'FULL NAME',
        'GENDER',
        'groupSangin',
        'L NAME',
        'PHONE',
        'PHONE VERIFY',
        'POID',
        'TAILS',
        'USER',
        'WILAYA',
        'email',
        'IsParent',
        'NameAndRelation',
        'parent',
        'Alcool',
        'medFavs',
        'RELATION',
        'Tabac',
        'TYPE',
    ];
}
