<?php

use App\Models\Tag;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\Role;

// Mail Routes:
Route::get('/mail', [MailController::class, 'accountConfirmationMail'])->name('mail');
Route::get('monday-mail', [MailController::class, 'mondayMail'])->name('monday.mail');
Route::get('tuesday-mail', [MailController::class, 'tuesdayMail'])->name('tuesday.mail');
Route::get('wednesday-mail', [MailController::class, 'wednesdayMail'])->name('wednesday.mail');
Route::get('thursday-mail', [MailController::class, 'thursdayMail'])->name('thursday.mail');
Route::get('friday-mail', [MailController::class, 'fridayMail'])->name('friday.mail');
Route::get('saterday-mail', [MailController::class, 'saterdayMail'])->name('saterday.mail');


// General Routes:
Route::get('/login', [AdminController::class, 'showAdminLoginPage'])->name('login.admin');
Route::post('/login', [LoginController::class, 'login'])->name('loggedin.admin');
Route::get('/register', [AdminController::class, 'showAdminRegisterPage'])->name('register.admin');
Route::post('/register', [RegisterController::class, 'register'])->name('register.admin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.admin');



// Admin Routes:
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'showAdminDashboardPage'])->name('dashboard.admin');

    // Posts
    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index.posts');
        Route::get('/create', [PostController::class, 'create'])->name('create.posts');
        Route::post('/store', [PostController::class, 'store'])->name('store.posts');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit.posts');
        Route::get('/active/{id}', [PostController::class, 'active']);
        Route::get('/inactive/{id}', [PostController::class, 'inactive']);
        Route::get('/trashes', [PostController::class, 'showTrashes'])->name('trashes.posts');
        Route::get('/trash/{id}', [PostController::class, 'trash'])->name('trash.posts');
        Route::get('/untrash/{id}', [PostController::class, 'untrash'])->name('untrash.posts');
        Route::get('/delete/{id}', [PostController::class, 'delete'])->name('delete.posts');

    });



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



