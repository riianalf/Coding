<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nik',
        'full_name',
        'father_name',
        'mother_name',
        'birth_place',
        'birth_date',
        'gender',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'phone',
        'email',
        'bpjs_number',
        'bpjs_active',
        'blood_type',
        'marital_status',
        'religion',
        'occupation',
        'nationality',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_phone',
        'medical_history',
        'allergies',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'bpjs_active' => 'boolean',
    ];
}
