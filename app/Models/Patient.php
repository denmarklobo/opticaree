<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'extension',
        'email',
        'password',
        'address',
        'contact',
        'birthdate',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];
}
