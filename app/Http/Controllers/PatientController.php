<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\PatientRequest;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('full_name')->paginate(15);
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(PatientRequest $request)
    {
        $data = $request->validated();
        $patient = Patient::create($data);
        return redirect()->route('patients.show', $patient)->with('success', 'Pasien dibuat.');
    }

    public function show(Patient $patient)
    {
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update($request->validated());
        return redirect()->route('patients.show', $patient)->with('success', 'Pasien diperbarui.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Pasien dihapus.');
    }
}
