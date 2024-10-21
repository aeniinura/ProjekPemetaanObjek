<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PythonController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/uploadfile', function () {
    return view('uploadfile');
})->middleware(['auth', 'verified'])->name('uploadfile');

Route::get('/perhitungan', function () {
    return view('perhitungan');
})->middleware(['auth', 'verified'])->name('perhitungan');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
