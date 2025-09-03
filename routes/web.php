<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::view('daftar-pasien', 'daftar-pasien')->name('daftar-pasien');
    // Patients resource (CRUD)
    Route::resource('patients', App\Http\Controllers\PatientController::class);
    // keep legacy route name for UI that expects rekam-medis.pasien
    Route::get('rekam-medis/pasien', [App\Http\Controllers\PatientController::class, 'index'])->name('rekam-medis.pasien');
    // Server-side area search used by address autofill (simple API route)
    Route::get('api/areas/search', [App\Http\Controllers\Api\AreaController::class, 'search'])->name('api.areas.search');
    // Route::view('rekam_medis.pasien', 'pasien')->name('pasien');
});

require __DIR__.'/auth.php';
