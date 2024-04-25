<?php

use App\Http\Controllers\Career\VaccancyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\PreventBackHistory;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('sitemap', function () {
    SitemapGenerator::create('https://blackrosessupport.co.uk/')->writeToFile('sitemap.xml');

    return 'site map created';
});
Route::get('about', [ViewController::class, 'about'])->name('about');
Route::get('services', [ViewController::class, 'services'])->name('services');
Route::get('vaccancies', [ViewController::class, 'vaccancy'])->name('vaccancies');
Route::get('referrals', [ViewController::class, 'referrals'])->name('referrals');
Route::get('contact', [ViewController::class, 'contact'])->name('contact');
Route::post('contact/send', [ContactController::class, 'contactUs'])->name('contact.send');
Route::get('team', [ViewController::class, 'team'])->name('team');
Route::get('apply/{job}', [ViewController::class, 'apply'])->name('job.apply');
Route::post('store/apply/{job}', [VaccancyController::class, 'storeApplication'])->name('store.job.apply');

Route::prefix('/admin')->middleware(['auth', 'permission:default users', PreventBackHistory::class])->group(function () {

    Route::get('/dashboard', [ViewController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/vacancy', [ViewController::class, 'vacancy'])->name('job.vacancy');
    Route::get('/post/vacancy', [ViewController::class, 'getPostVacancy'])->name('get.advertise.job.vacancy');
    Route::post('/post/vacancy', [VaccancyController::class, 'postVacancy'])->name('post.job.vacancy');
});

require __DIR__ . '/auth.php';
