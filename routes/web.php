<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::post('/subscribe', function (Request $request) {
    // Validate email
    $validated = $request->validate([
        'email' => 'required|email'
    ]);

    // TODO: Handle subscription logic here
    // For example, save to database or third-party service

    return back()->with('success', 'Thank you for subscribing!');
})->name('subscribe');
require __DIR__.'/auth.php';
