<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescribe extends Model
{
    use HasFactory;

    protected $primaryKey = 'prescribes_id';

    protected $fillable = [
        'patient_id',
        'lefts',
        'rights',
        'leftc',
        'rightc',
        'lefta',
        'righta',
        'pd',
        'reading_add',
        'visual_acuity',
        'date',
    ];

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
