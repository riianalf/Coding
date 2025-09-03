<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nik' => 'required|string|max:25|unique:patients,nik,' . ($this->patient->id ?? 'NULL'),
            'full_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'desa' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'bpjs_number' => 'nullable|string|max:50',
        ];
    }
}
