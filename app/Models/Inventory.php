<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'medicine_name',
        'type',
        'description',
        'status',
        'quantity'
    ];
}