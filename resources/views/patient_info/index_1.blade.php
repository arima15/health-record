@extends('layouts.app')

@section('title', 'Patient Records')

@section('content')
<div class="patient-records-container">
    <div class="header-actions">
        <h1>Patient Records</h1>
        <a href="{{ route('patients.create') }}" class="btn-add">
            <i class="fas fa-plus"></i> Add New Patient
        </a>
    </div>

    <div class="search-filter-container">
        <div class="search-box">
            <i class="fas fa-search" style="position: absolute; left: 10px; top: 24px; transform: translateY(-50%);"></i>
            <input type="text" id="patientSearch" placeholder="     Search patients..." style="width: 60%;">
        </div>
        <div class="filter-options">
            <select>
                <option value="">All Records</option>
                <option value="recent">Recent</option>
                <option value="alphabetical">Alphabetical</option>
            </select>
        </div>
    </div>

    <div class="patients-grid" id="patientsGrid">
        @forelse($patients as $patient)
            <div class="patient-card">
                <div class="patient-info">
                    <h3>{{ $patient->lastname }}, {{ $patient->firstname }}</h3>
                    <p><i class="fas fa-id-card"></i> ID: {{ $patient->id }}</p>
                    <p><i class="fas fa-phone"></i> {{ $patient->contact_no }}</p>
                </div>
                <div class="card-actions">
                    <a href="{{ route('patients.show', $patient->id) }}" class="btn-view">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="{{ route('patients.edit', $patient->id) }}" class="btn-edit">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                </div>
            </div>
        @empty
            <div class="no-records">
                <i class="fas fa-folder-open"></i>
                <p>No patient records found</p>
            </div>
        @endforelse
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/essentials/search.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('patientSearch');
        const grid = document.getElementById('patientsGrid');

        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const cards = grid.getElementsByClassName('patient-card');

            for (let card of cards) {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            }
        });
    });
</script>
@endsection
