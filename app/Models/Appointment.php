<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'appointment_date_time',
        'patient_name',
        'grade_or_position',
        'age',
        'chief_complaints',
        'medical_diagnoses',
        'treatment'
    ];

    protected $casts = [
        'appointment_date_time' => 'datetime',
    ];
}