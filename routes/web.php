<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('about', [ViewController::class, 'about'])->name('about');
Route::get('services', [ViewController::class, 'services'])->name('services');
Route::get('testmonials', [ViewController::class, 'testmonials'])->name('testmonials');
Route::get('referrals', [ViewController::class, 'referrals'])->name('referrals');
Route::get('contact', [ViewController::class, 'contact'])->name('contact');
Route::post('contact/send', [ContactController::class, 'contactUs'])->name('contact.send');
Route::get('team', [ViewController::class, 'team'])->name('team');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/admin')->group(function () {

    Route::get('/dashboard', [ViewController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/vacancy', [ViewController::class, 'vacancy'])->name('job.vacancy');
    Route::get('/post/vacancy', [ViewController::class, 'postVacancy'])->name('post.job.vacancy');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
