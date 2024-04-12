<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', [ViewController::class, 'home'])->name('home');
Route::get('about', [ViewController::class, 'about'])->name('about');
Route::get('services', [ViewController::class, 'services'])->name('services');
Route::get('testmonials', [ViewController::class, 'testmonials'])->name('testmonials');
Route::get('referrals', [ViewController::class, 'referrals'])->name('referrals');
Route::get('contact', [ViewController::class, 'contact'])->name('contact');
Route::get('team', [ViewController::class, 'team'])->name('team');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
