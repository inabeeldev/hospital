<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantPatient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'consultant_id'
    ];
}
