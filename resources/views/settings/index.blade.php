@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="settings-container">
    <div class="settings-buttons">
        <button id="openProfilePictureModal" class="btn">
            <i class="fas fa-camera"></i> Change Profile Picture
        </button>
        <button id="openUpdateProfileModal" class="btn">
            <i class="fas fa-user-edit"></i> Update Profile
        </button>
        <button id="openChangePasswordModal" class="btn">
            <i class="fas fa-key"></i> Change Password
        </button>
        @if(auth()->user()->is_admin)
        <button id="openCreateAccountModal" class="btn">
            <i class="fas fa-user-plus"></i> Create New Account
        </button>
        @endif
    </div>

    <!-- Modals -->
    <div id="profilePictureModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3>Change Profile Picture</h3>
            <form action="{{ route('settings.update-profile-picture') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-label">Select New Picture</label>
                    <input type="file" class="form-control" name="profile_picture" accept="image/*" required>
                </div>
                <button type="submit" class="btn">Update Picture</button>
            </form>
        </div>
    </div>

    <div id="updateProfileModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3>Update Profile</h3>
            <form action="{{ route('settings.update-profile') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ auth()->user()->username }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                </div>
                <button type="submit" class="btn">Update Profile</button>
            </form>
        </div>
    </div>

    <div id="changePasswordModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3>Change Password</h3>
            <form action="{{ route('settings.change-password') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="current_password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">New Password</label>
                    <input type="password" class="form-control" name="new_password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" name="new_password_confirmation" required>
                </div>
                <button type="submit" class="btn">Change Password</button>
            </form>
        </div>
    </div>

    @if(auth()->user()->is_admin)
    <div id="createAccountModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3>Create New Account</h3>
            <form action="{{ route('settings.create-account') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="new_username" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="new_email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="new_user_password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="new_user_password_confirmation" required>
                </div>
                <button type="submit" class="btn">Create Account</button>
            </form>
        </div>
    </div>
    @endif
</div>
@endsection