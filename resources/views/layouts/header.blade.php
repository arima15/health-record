<header class="dashboard-header">
    <div class="header-left">
        <button id="sidebar-toggle" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="header-title">Dashboard</h1>
    </div>
    <div class="header-right">
        <div class="header-notifications">
            <button class="notification-btn">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </button>
        </div>
        <div class="header-profile">
            <img src="{{ auth()->user()->profile_picture 
                ? asset('storage/' . auth()->user()->profile_picture) 
                : asset('images/default-avatar.png') }}" 
                alt="Profile" 
                class="profile-image">
            <div class="profile-info">
                <span class="profile-name">{{ auth()->user()->username }}</span>
                <button class="profile-menu-btn">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </div>
</header> 