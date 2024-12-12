@extends('layouts.app')

@section('title', 'Patient Details')

@section('content')
<div class="patient-details-container">
    <div class="header-actions">
        <h1>Patient Details</h1>
        <a href="{{ route('patients.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <div class="patient-details-form">
        <div class="form-group">
            <label>Last Name:</label>
            <div class="form-value">{{ $patient->lastname }}</div>
        </div>

        <div class="form-group">
            <label>First Name:</label>
            <div class="form-value">{{ $patient->firstname }}</div>
        </div>

        <div class="form-group">
            <label>Middle Name:</label>
            <div class="form-value">{{ $patient->middlename ?? 'N/A' }}</div>
        </div>

        <div class="form-group">
            <label>Address:</label>
            <div class="form-value">{{ $patient->address }}</div>
        </div>

        <div class="form-group">
            <label>Birthdate:</label>
            <div class="form-value">{{ $patient->birthdate }}</div>
        </div>

        <div class="form-group">
            <label>Birthplace:</label>
            <div class="form-value">{{ $patient->birthplace }}</div>
        </div>

        <div class="form-group">
            <label>Civil Status:</label>
            <div class="form-value">{{ $patient->civil_status }}</div>
        </div>

        <div class="form-group">
            <label>Contact Number:</label>
            <div class="form-value">{{ $patient->contact_no }}</div>
        </div>

        <div class="form-group">
            <label>Occupation:</label>
            <div class="form-value">{{ $patient->occupation ?? 'N/A' }}</div>
        </div>

        <div class="form-actions">
            <a href="{{ route('patients.edit', $patient->id) }}" class="btn-edit">
                <i class="fas fa-edit"></i> Edit Details
            </a>
        </div>
    </div>
</div>
@endsection

<style>
.patient-details-container {
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

.patient-details-form {
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

.btn-back, .btn-edit {
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-back {
    background: #6c757d;
    color: white;
}

.btn-edit {
    background: #007bff;
    color: white;
}
</style> 