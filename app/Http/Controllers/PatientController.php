<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::latest()->get();
        return view('patient_info.index_1', compact('patients'));
    }

    public function create()
    {
        return view('patient_info.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'address' => 'required|string',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string',
            'civil_status' => 'required|in:Single,Married,Widowed,Divorced',
            'contact_no' => 'required|string',
            'occupation' => 'nullable|string|max:255',
        ]);

        Patient::create($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Patient record created successfully.');
    }

    public function show(Patient $patient)
    {
        return view('patient_info.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patient_info.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'address' => 'required|string',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string',
            'civil_status' => 'required|in:Single,Married,Widowed,Divorced',
            'contact_no' => 'required|string',
            'occupation' => 'nullable|string|max:255',
        ]);

        $patient->update($validated);

        return redirect()->route('patients.index')
            ->with('success', 'Patient record updated successfully.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'Patient record deleted successfully.');
    }
}
