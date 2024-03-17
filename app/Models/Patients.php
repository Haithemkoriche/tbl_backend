<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'ADDRESS',
        'Alcool',
        'Allergies',
        'Antécédent chirurgical',
        'Antécédent chronique',
        'Antécédents familiaux',
        'B DAY',
        'email',
        'EMAIL VERIFY',
        'F NAME',
        'FULL NAME',
        'GENDER',
        'groupSangin',
        'IsParent',
        'L NAME',
        'LANG',
        'medFav',
        'medFavs',
        'NameAndRelation',
        'parent',
        'PHONE',
        'PHONE VERIFY',
        'POID',
        'RDV',
        'RELATION',
        'STATUS',
        'Tabac',
        'TAILS',
        'TYPE',
        'USER',
        'WILAYA',
        'Creation Date',
        'Modified Date',
        'Slug',
        'Creator',
        'unique id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'Allergies' => 'array',
        'medFav' => 'array',
        'medFavs' => 'array',
        'NameAndRelation' => 'array',
        'RDV' => 'array',
        // Other fields are not arrays but keep them if you need to cast them differently
        'EMAIL VERIFY' => 'string',
        'IsParent' => 'string',
        'PHONE VERIFY' => 'string',
        'Tabac' => 'string',
        'B DAY' => 'string', // Keep as string if you want to preserve the exact format
        'Creation Date' => 'string',
        'Modified Date' => 'string',
    ];

    // If you have any dates that you want to treat as Carbon instances but store as strings
    protected $dates = [
        // 'B DAY', 'Creation Date', 'Modified Date',
    ];
}
