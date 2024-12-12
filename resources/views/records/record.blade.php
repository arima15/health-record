@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/records/appointments.css') }}">
<div class="container">
    <div class="header">
        <h1>Appointments</h1>
        <button class="btn btn-primary btn-lg add-appointment-btn" onclick="window.location='{{ route('appointments.create') }}'">
    <i class="fas fa-plus"></i> Add Appointment
</button>
    </div>
    <input type="text" id="appointmentSearch" class="form-control mt-3 search-input" placeholder="Search appointments...">
    <table class="table table-hover mt-3" id="appointmentTable">
        <thead class="thead-dark">
            <tr>
                <th>Date</th>
                <th>Patient Name</th>
                <th>Medical Diagnoses</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="appointmentTable">
            @if($appointments && count($appointments) > 0)
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->appointment_date_time->format('Y-m-d') }}</td>
                        <td>{{ $appointment->patient_name }}</td>
                        <td>{{ $appointment->medical_diagnoses }}</td>
                        <td>
                            <a href="{{ route('appointments.show', $appointment->id) }}" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this appointment?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No appointments found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
<script src="{{ asset('js/records/appointments.js') }}"></script>
<script src="{{ asset('js/essentials/search.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        initializeSearch('appointmentTable', 'appointmentSearch');
    });
</script>

@endsection