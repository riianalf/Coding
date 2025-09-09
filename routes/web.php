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
    // direct Livewire page for pasien (renders resources/views/pasien.blade.php which contains <livewire:pasiens />)
    Route::view('pasiens', 'pasien')->name('pasiens.index');
    // Patients resource (CRUD)
    Route::resource('patients', App\Http\Controllers\PatientController::class);
    // keep legacy route name for UI that expects rekam-medis.pasien
    // render the same view as patients.index directly (Livewire inside will fetch data)
    Route::view('rekam-medis/pasien', 'patients.index')->name('rekam-medis.pasien');
    // Server-side area search used by address autofill (simple API route)
    Route::get('api/areas/search', [App\Http\Controllers\Api\AreaController::class, 'search'])->name('api.areas.search');
    // Route::view('rekam_medis.pasien', 'pasien')->name('pasien');
});

require __DIR__.'/auth.php';
