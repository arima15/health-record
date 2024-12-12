@extends('layouts.app')

@section('title', 'Appointment Details')

@section('content')
<div class="appointment-details-container">
    <div class="header-actions">
        <h1>Appointment Details</h1>
        <a href="{{ route('appointments.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="appointment-details-form">
        <div class="form-group">
            <label>Date & Time:</label>
            <div class="form-value">{{ $appointment->appointment_date_time }}</div>
        </div>

        <div class="form-group">
            <label>Patient Name:</label>
            <div class="form-value">{{ $appointment->patient_name }}</div>
        </div>

        <div class="form-group">
            <label>Grade/Position:</label>
            <div class="form-value">{{ $appointment->grade_or_position }}</div>
        </div>

        <div class="form-group">
            <label>Age:</label>
            <div class="form-value">{{ $appointment->age }}</div>
        </div>

        <div class="form-group">
            <label>Chief Complaints:</label>
            <div class="form-value">{{ $appointment->chief_complaints }}</div>
        </div>

        <div class="form-group">
            <label>Medical Diagnoses:</label>
            <div class="form-value">{{ $appointment->medical_diagnoses }}</div>
        </div>

        <div class="form-group">
            <label>Treatment:</label>
            <div class="form-value">{{ $appointment->treatment }}</div>
        </div>

        <div class="form-actions">
            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">
                    <i class="fas fa-trash"></i> Delete Appointment
                </button>
            </form>
        </div>
    </div>
</div>

<style>
.appointment-details-container {
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

.appointment-details-form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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

.form-value {
    padding: 10px;
    background: #f8f9fa;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.form-actions {
    margin-top: 30px;
    text-align: right;
}

.btn-back, .btn-delete {
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

.btn-delete {
    background: #dc3545;
    color: white;
}
</style>
@endsection 