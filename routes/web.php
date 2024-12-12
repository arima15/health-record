<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/dashboard', function () {
    return view('dash.dashboard');
})->name('dashboard');


Route::get('/settings', function () {
    return view('settings.index');
})->name('settings.index');

Route::get('/records', [AppointmentController::class, 'index'])->name('records.record');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

Route::get('/patient', [PatientController::class, 'index'])->name('patient_info.index');

Route::resource('patients', PatientController::class);
Route::resource('inventory', InventoryController::class);
Route::resource('appointments', AppointmentController::class);

// Settings Routes
Route::prefix('settings')->name('settings.')->middleware(['auth'])->group(function () {
    Route::get('/', [SettingsController::class, 'index'])->name('index');
    Route::post('/update-profile', [SettingsController::class, 'updateProfile'])->name('update-profile');
    Route::post('/update-profile-picture', [SettingsController::class, 'updateProfilePicture'])->name('update-profile-picture');
    Route::post('/change-password', [SettingsController::class, 'changePassword'])->name('change-password');
    Route::post('/create-account', [SettingsController::class, 'createAccount'])->name('create-account');
});

// Guest routes
Route::middleware('guest')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.dashboard');
    })->name('dashboard');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});