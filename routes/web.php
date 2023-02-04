<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GovapController;
use App\Http\Controllers\BioController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
// have
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user_dashboard', function () {
    return Inertia::render('user_dashboard');
})->middleware(['auth', 'verified'])->name('user_dashboard');

Route::get('/regform', function () {
    return Inertia::render('regform');
})->middleware(['auth', 'verified'])->name('regform');

Route::get('/govform', function () {
    return Inertia::render('govform');
})->middleware(['auth', 'verified'])->name('govform');

Route::get('/departments', function () {
    return Inertia::render('Departments');
})->middleware(['auth', 'verified'])->name('departments');

Route::get('/staffshow', function () {
    return Inertia::render('staffshow');
})->middleware(['auth', 'verified'])->name('staffshow');

Route::get('show/{bio:id}', [BioController::class, 'show'])->name('show.bio');

Route::resource('bio', BioController::class)
->only(['index', 'store','update', 'destroy'])
->middleware(['auth', 'verified']);

//this is it so u have to add the name() like this is resource
//so we can't redirect to resource? its posible because /gov for post existe 
Route::resource('gov', GovapController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';