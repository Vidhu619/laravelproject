<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
return redirect()->route('login');});

Route::get('/dashboard', function () {
    return redirect()->route('posts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
    Route::get('/profile', function () { return view('profile'); })->name('profile');
    Route::put('/password', [PasswordController::class, 'update']) ->middleware('auth')
    ->name('password.update');
});


require __DIR__.'/auth.php';
