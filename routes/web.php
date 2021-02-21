<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/companies', function () {
    return view('company.index');
})->name('companies');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/companies/{slug}', \App\Http\Livewire\Company\Single::class);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/servers', function () {
    return view('server.index');
})->name('servers');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/servers/{slug}', \App\Http\Livewire\Server\Single::class);
});
