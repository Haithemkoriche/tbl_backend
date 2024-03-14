<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medecins extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_by',
        'address',
        'annu',
        'average_rate',
        'email_verified',
        'etab',
        'full_name',
        'phone',
        'speciality',
        'speciality_full',
        'status',
        'wilaya_full',
        'wilaya',
    ];
    
}
