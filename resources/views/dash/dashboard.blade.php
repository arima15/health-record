@extends('layouts.app')

@section('content')
    <!-- Top Statistics Section -->
    <div class="statistics-cards">
        <div class="card card-orange">
            <div class="card-content">
                <i class="fas fa-calendar-check"></i>
                <h3>Appointment today</h3>
                <p>{{ App\Models\Appointment::whereDate('appointment_date_time', today())->count() }}</p>
            </div>
        </div>
        <div class="card card-green">
            <div class="card-content">
                <i class="fas fa-pills"></i>
                <h3>Critical stocks</h3>
                <p>{{ App\Models\Inventory::where('quantity', '<=', 10)->count() }}</p>
            </div>
        </div>
        <div class="card card-dark">
            <div class="card-content">
                <i class="fas fa-users"></i>
                <h3>Total users</h3>
                <p>{{ App\Models\User::count() }}</p>
            </div>
        </div>
    </div>

    <!-- Graph Section -->
    <div class="statistics-graph" style="padding: 20px; border: 1px solid #dee2e6; border-radius: 10px;">
        <div class="graph-header">
            <div class="graph-options">
                <select name="graph-type" id="graph-type" style="border-radius: 5px;">
                    <option value="line">Line graph</option>
                </select>
            </div>
            <div class="graph-year">
                <button id="prev-year">&lt;</button>
                <span id="current-year">2024</span>
                <button id="next-year">&gt;</button>
            </div>
        </div>
        <div class="graph-content">
            <h4>Appointment Statistics</h4>
            <div class="graph-legend">
                <span class="legend-item done" style="color: #ffcc00;">Completed</span>
                <span class="legend-item undone" style="color: #28a745;">Pending</span>
            </div>
            <canvas id="statisticsChart" height="300"></canvas>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/dash/dashboard.js') }}" defer></script>
@endsection
