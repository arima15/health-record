<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'lastname',
        'firstname',
        'middlename',
        'address',
        'birthdate',
        'birthplace',
        'civil_status',
        'contact_no',
        'occupation'
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];
}
