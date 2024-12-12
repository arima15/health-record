@extends('layouts.app')

@section('title', 'Edit Patient')

@section('content')
<div class="patient-edit-container">
    <div class="header-actions">
        <h1>Edit Patient Details</h1>
        <a href="{{ route('patients.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back to List
        </a>
    </div>

    <form action="{{ route('patients.update', $patient->id) }}" method="POST" class="patient-edit-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $patient->lastname) }}" required>
            @error('lastname')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $patient->firstname) }}" required>
            @error('firstname')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename" value="{{ old('middlename', $patient->middlename) }}">
            @error('middlename')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" required>{{ old('address', $patient->address) }}</textarea>
            @error('address')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" value="{{ old('birthdate', $patient->birthdate) }}" required>
            @error('birthdate')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="birthplace">Birthplace:</label>
            <input type="text" id="birthplace" name="birthplace" value="{{ old('birthplace', $patient->birthplace) }}" required>
            @error('birthplace')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="civil_status">Civil Status:</label>
            <select id="civil_status" name="civil_status" required>
                <option value="Single" {{ old('civil_status', $patient->civil_status) == 'Single' ? 'selected' : '' }}>Single</option>
                <option value="Married" {{ old('civil_status', $patient->civil_status) == 'Married' ? 'selected' : '' }}>Married</option>
                <option value="Widowed" {{ old('civil_status', $patient->civil_status) == 'Widowed' ? 'selected' : '' }}>Widowed</option>
                <option value="Divorced" {{ old('civil_status', $patient->civil_status) == 'Divorced' ? 'selected' : '' }}>Divorced</option>
            </select>
            @error('civil_status')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="contact_no">Contact Number:</label>
            <input type="text" id="contact_no" name="contact_no" value="{{ old('contact_no', $patient->contact_no) }}" required>
            @error('contact_no')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input type="text" id="occupation" name="occupation" value="{{ old('occupation', $patient->occupation) }}">
            @error('occupation')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">
                <i class="fas fa-save"></i> Save Changes
            </button>
        </div>
    </form>
</div>

<style>
.patient-edit-container {
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

.patient-edit-form {
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

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

.form-group textarea {
    height: 100px;
    resize: vertical;
}

.error-message {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
    display: block;
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
</style>
@endsection 