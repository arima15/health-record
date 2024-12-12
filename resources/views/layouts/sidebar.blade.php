<div class="sidebar" style="background-color: #2C3E50; color: #ECF0F1;">
    <div class="sidebar-header">
        <h2 class="sidebar-title">Health Record System</h2>
    </div>
    <ul class="sidebar-menu">
        <li>
            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-line"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('patient_info.index') }}" class="sidebar-link {{ request()->routeIs('patient_info.*') ? 'active' : '' }}">
                <i class="fas fa-user-md"></i>
                Patient record
            </a>
        </li>
        <li>
            <a href="{{ route('records.record') }}" class="sidebar-link {{ request()->routeIs('records.*') ? 'active' : '' }}">
                <i class="fas fa-calendar-alt"></i>
                Logbook records
            </a>
        </li>
        <li>
            <a href="{{ route('inventory.index') }}" class="sidebar-link {{ request()->routeIs('inventory.*') ? 'active' : '' }}">
                <i class="fas fa-procedures"></i>
                Inventory
            </a>
        </li>
        <li>
            <a href="{{ route('settings.index') }}" class="sidebar-link {{ request()->routeIs('settings.*') ? 'active' : '' }}">
                <i class="fas fa-cog"></i>
                Settings
            </a>
        </li>
    </ul>
</div>
