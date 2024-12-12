<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('records.record', compact('appointments'));
    }

    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'appointment_date_time' => 'required|date_format:Y-m-d\TH:i',
            'patient_name' => 'required|string|max:255',
            'grade_or_position' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'chief_complaints' => 'required|string|max:255',
            'medical_diagnoses' => 'required|string|max:255',
            'treatment' => 'required|string|max:255',
        ]);

        Appointment::create($validated);

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment created successfully.');
    }

    public function show(Appointment $appointment)
    {
        return view('records.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        if (request()->ajax()) {
            return response()->json($appointment);
        }
        return view('records.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'appointment_date_time' => 'required|date_format:Y-m-d\TH:i',
            'patient_name' => 'required|string|max:255',
            'grade_or_position' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'chief_complaints' => 'required|string|max:255',
            'medical_diagnoses' => 'required|string|max:255',
            'treatment' => 'required|string|max:255',
        ]);

        $appointment->update($validated);

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment deleted successfully.');
    }
}