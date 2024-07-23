<?php

use App\Http\Controllers\Career\VaccancyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\PreventBackHistory;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('sitemap', SitemapController::class)->name('gen.sitemap');
Route::get('about', [ViewController::class, 'about'])->name('about');
Route::get('services', [ViewController::class, 'services'])->name('services');
Route::get('vacancies', [ViewController::class, 'vaccancy'])->name('vaccancies');
Route::get('referrals', [ViewController::class, 'referrals'])->name('referrals');
Route::get('contact', [ViewController::class, 'contact'])->name('contact');
Route::post('contact/send', [ContactController::class, 'contactUs'])->middleware('throttle:3,1')->name('contact.send');
Route::get('team', [ViewController::class, 'team'])->name('team');
Route::get('apply/{job}', [ViewController::class, 'apply'])->name('job.apply');
Route::post('store/apply/{job}', [VaccancyController::class, 'storeApplication'])->middleware('throttle:5,1')->name('store.job.apply');

Route::prefix('/admin')->middleware(['auth', 'permission:manage all staff', PreventBackHistory::class])->group(function () {
    Route::prefix('/profile')->group(function () {
        Route::get('/', [ViewController::class, 'getProfile'])->name('get.user.profile');
        Route::get('/edit', [ViewController::class, 'getProfileEdit'])->name('get.user.profile.edit');
        Route::put('/edit', [ProfileController::class, 'updateProfileEdit'])->name('update.user.profile.edit');
    });
    Route::prefix('/team')->group(function () {
        Route::get('/', [ViewController::class, 'getTeam'])->name('get.brs.team');
        Route::get('/add-team', [ViewController::class, 'addTeamMember'])->name('add.brs.team.member');
        Route::get('/mail-team', [ViewController::class, 'mailTeamMember'])->name('mail.brs.team.member');
        Route::post('/mail-team', [SendMailController::class, 'mailTeamMemberPost'])->name('send.staff.mail');
    });
    Route::prefix('/certificate')->group(function () {
        Route::get('/', [ViewController::class, 'getCertificate'])->name('get.brs.certs');
    });
    Route::get('/dashboard', [ViewController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/vacancy', [ViewController::class, 'vacancy'])->name('job.vacancy');
    Route::get('/post/vacancy', [ViewController::class, 'getPostVacancy'])->name('get.advertise.job.vacancy');
    Route::post('/post/vacancy', [VaccancyController::class, 'postVacancy'])->name('post.job.vacancy');
    Route::put('/update/vacancy/{uuid}', [VaccancyController::class, 'updateVacancy'])->name('update.job.vacancy');
    Route::get('/job/applications', [ViewController::class, 'jobApplications'])->name('get.job.applications');
    Route::put('/job/applications/listing/{uuid}', [VaccancyController::class, 'jobListing'])->name('toggle.job.applications.listing');
    Route::get('/job/applications/{uuid}', [ViewController::class, 'jobApplication'])->name('get.job.application.uuid');
    Route::get('/download/{uuid}', [VaccancyController::class, 'downloadCV'])->name('cv.download');
    Route::delete('/delete/application/{uuid}', [VaccancyController::class, 'deleteApplication'])->name('delete.job.application');
    Route::get('/approve/application/{uuid}', [VaccancyController::class, 'approveApplication'])->name('approve.job.application');
    Route::get('/reject/application/{uuid}', [VaccancyController::class, 'rejectApplication'])->name('reject.job.application');
});

require __DIR__ . '/auth.php';
