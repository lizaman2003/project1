<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperadminController;

Route::get('/', [MainController::class, 'main'])->name('home');
Route::get('/timetable', [TimetableController::class, 'timetable'])->name('timetable');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/teachers', [MainController::class, 'teachers'])->name('teachers');
Route::get('/method', [MainController::class, 'method'])->name('method');
Route::get('/consent', [MainController::class, 'consent'])->name('consent');

Route::middleware(['guest'])->group(function () {
    Route::post('/register', [UserController::class, 'register'])->name('register');
    Route::post('/auth', [UserController::class, 'auth'])->name('auth');
});
Route::middleware(['auth'])->group(function () {
    Route::post('/newComment', [MainController::class, 'newComment'])->name('newComment');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/personal_cabinet', [PersonalController::class, 'personal'])->name('personal');
    Route::get('/personal_cabinet/deleate/{id}/{id_lesson}', [PersonalController::class, 'deleteLesson_book'])->name('deleteLesson_book');
    Route::get('/personal_cabinet/addLesson_book', [PersonalController::class, 'addLesson_book'])->name('addLesson_book');

    Route::post('/personal_cabinet/paidaboniment', [PersonalController::class, 'paidAboniment'])->name('paidAboniment');

    Route::post('/personal_cabinet/allchange', [PersonalController::class, 'allSettigs'])->name('allSettigs');
    Route::post('/personal_cabinet/passwordchange', [PersonalController::class, 'passwordSettigs'])->name('passwordSettigs');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin_panel', [AdminController::class, 'admin'])->name('admin');
        Route::get('/superadmin_panel', [SuperadminController::class, 'superadmin'])->name('superadmin');
        Route::post('/addMaterial', [SuperadminController::class, 'addMaterial'])->name('addMaterial');
        Route::get('/filter', [AdminController::class, 'filter'])->name('filter');
        Route::get('/filter_lesson', [SuperadminController::class, 'filterlesson'])->name('filterlesson');
        Route::post('/addLesson', [SuperadminController::class, 'addLesson'])->name('addLesson');
        Route::post('/superadmin_panel/changeUser/{id}', [SuperadminController::class, 'changeForm'])->name('changeForm');
        Route::post('/superadmin_panel/changeLevel/{id}', [SuperadminController::class, 'changeLevel'])->name('changeLevel');
        Route::post('/superadmin_panel/changeabonement/{id}', [SuperadminController::class, 'changeabonement'])->name('changeabonement');
       
    });
});
