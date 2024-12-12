@extends('layouts.app')

@section('title', 'Edit Appointment')

@section('content')
<div class="appointment-edit-container">
    <div class="header-actions">
        <h1>Edit Appointment</h1>
        <a href="{{ route('appointments.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST" class="appointment-edit-form">
        @csrf
        @method('PUT')

        <div class="form-section">
            <h6 class="section-title">Appointment Details</h6>
            <div class="form-group">
                <label for="appointment_date_time">
                    <i class="far fa-calendar-alt"></i> Date & Time*
                </label>
                <input type="datetime-local" 
                    class="form-control @error('appointment_date_time') is-invalid @enderror" 
                    id="appointment_date_time" 
                    name="appointment_date_time" 
                    value="{{ old('appointment_date_time', date('Y-m-d\TH:i', strtotime($appointment->appointment_date_time))) }}"
                    required>
                @error('appointment_date_time')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-section">
            <h6 class="section-title">Patient Information</h6>
            <div class="form-group">
                <label for="patient_name">
                    <i class="far fa-user"></i> Patient Name*
                </label>
                <input type="text" 
                    class="form-control @error('patient_name') is-invalid @enderror" 
                    id="patient_name" 
                    name="patient_name" 
                    value="{{ old('patient_name', $appointment->patient_name) }}"
                    required>
                @error('patient_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="grade_or_position">
                    <i class="fas fa-user-tag"></i> Grade/Position*
                </label>
                <input type="text" 
                    class="form-control @error('grade_or_position') is-invalid @enderror" 
                    id="grade_or_position" 
                    name="grade_or_position" 
                    value="{{ old('grade_or_position', $appointment->grade_or_position) }}"
                    required>
                @error('grade_or_position')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">
                    <i class="fas fa-birthday-cake"></i> Age*
                </label>
                <input type="number" 
                    class="form-control @error('age') is-invalid @enderror" 
                    id="age" 
                    name="age" 
                    value="{{ old('age', $appointment->age) }}"
                    required>
                @error('age')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-section">
            <h6 class="section-title">Medical Information</h6>
            <div class="form-group">
                <label for="chief_complaints">
                    <i class="fas fa-notes-medical"></i> Chief Complaints*
                </label>
                <textarea 
                    class="form-control @error('chief_complaints') is-invalid @enderror" 
                    id="chief_complaints" 
                    name="chief_complaints" 
                    rows="2" 
                    required>{{ old('chief_complaints', $appointment->chief_complaints) }}</textarea>
                @error('chief_complaints')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="medical_diagnoses">
                    <i class="fas fa-stethoscope"></i> Medical Diagnoses*
                </label>
                <textarea 
                    class="form-control @error('medical_diagnoses') is-invalid @enderror" 
                    id="medical_diagnoses" 
                    name="medical_diagnoses" 
                    rows="2" 
                    required>{{ old('medical_diagnoses', $appointment->medical_diagnoses) }}</textarea>
                @error('medical_diagnoses')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="treatment">
                    <i class="fas fa-prescription-bottle-medical"></i> Treatment*
                </label>
                <textarea 
                    class="form-control @error('treatment') is-invalid @enderror" 
                    id="treatment" 
                    name="treatment" 
                    rows="2" 
                    required>{{ old('treatment', $appointment->treatment) }}</textarea>
                @error('treatment')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">
                <i class="fas fa-save"></i> Update Appointment
            </button>
        </div>
    </form>
</div>

<style>
.appointment-edit-container {
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.header-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.appointment-edit-form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.form-section {
    margin-bottom: 20px;
}

.section-title {
    color: #2c3e50;
    font-weight: 600;
    margin-bottom: 1.25rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #e9ecef;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #666;
}

.form-control {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.form-control:focus {
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
}

.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

.form-actions {
    margin-top: 30px;
    text-align: right;
}

.btn-back, .btn-save {
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    border: none;
    cursor: pointer;
}

.btn-back {
    background: #6c757d;
    color: white;
}

.btn-save {
    background: #28a745;
    color: white;
}

textarea {
    resize: vertical;
    min-height: 80px;
}
</style>
@endsection 