<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Tag;

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
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('loggedin.admin');
    Route::get('/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterPage'])->name('register.admin');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.admin');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout.admin');
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboardPage'])->name('dashboard.admin');




    // Blog Posts Routes:
    Route::prefix('posts')->group(function () {

        Route::get('/', [PostController::class, 'index'])->name('index.posts');
        // Categories
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index.category');
            Route::post('/store', [CategoryController::class, 'store'])->name('store.category');
            Route::get('/getrecords', [CategoryController::class, 'getRecords'])->name('getrecords.category');
            Route::get('/active/{id}', [CategoryController::class, 'active']);
            Route::get('/inactive/{id}', [CategoryController::class, 'inactive']);
            Route::get('/edit/{id}', [CategoryController::class, 'edit']);
            Route::put('/update', [CategoryController::class, 'update']);
            Route::get('/delete/{id}', [CategoryController::class, 'delete']);

        });



        // Tags
        Route::prefix('tag')->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('index.tag');
            Route::post('/store', [TagController::class, 'store']);
            Route::get('/getrecords', [TagController::class, 'getRecords']);
            Route::get('/edit/{id}', [TagController::class, 'edit']);
            Route::post('/update', [TagController::class, 'update']);
            Route::get('/delete/{id}', [TagController::class, 'delete']);

            Route::get('/active/{id}', [TagController::class, 'active']);
            Route::get('/inactive/{id}', [TagController::class, 'inactive']);
        });


    });
































});



