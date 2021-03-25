<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mail', [MailController::class, 'accountConfirmationMail'])->name('mail');

Route::get('monday-mail', [MailController::class, 'mondayMail'])->name('monday.mail');
Route::get('tuesday-mail', [MailController::class, 'tuesdayMail'])->name('tuesday.mail');
Route::get('wednesday-mail', [MailController::class, 'wednesdayMail'])->name('wednesday.mail');
Route::get('thursday-mail', [MailController::class, 'thursdayMail'])->name('thursday.mail');
Route::get('friday-mail', [MailController::class, 'fridayMail'])->name('friday.mail');
Route::get('saterday-mail', [MailController::class, 'saterdayMail'])->name('saterday.mail');


// Admin Routes:
Route::prefix('admin')->group(function () {
    Route::get('/login', [App\Http\Controllers\AdminController::class, 'showAdminLoginPage'])->name('login.admin');
    Route::get('/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterPage'])->name('register.admin');
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboardPage'])->name('dashboard.admin');
});
