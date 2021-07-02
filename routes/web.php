<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/new-dash', function () {
    return view('new-dash');
})->name('new-dash');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('/companies/{company:slug}', [CompanyController::class, 'show'])->name('company.show');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/servers', function () {
    return view('server.index');
})->name('servers');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/servers/{slug}', \App\Http\Livewire\Server\Single::class);
});
