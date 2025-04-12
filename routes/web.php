<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PublicEventController;
use App\Http\Controllers\PublicResourceController;
use App\Http\Controllers\Auth\LoginController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Auth::routes();

Route::get('/resources', [PublicResourceController::class, 'index'])->name('resources.index');
// Рут за изтегляне на конкретен файл (пример)
Route::get('/resources/{resource}/download', [PublicResourceController::class, 'download'])->name('resources.download');

Route::get('/events', [PublicEventController::class, 'index'])->name('events.index');

Route::resource('news', NewsController::class);
