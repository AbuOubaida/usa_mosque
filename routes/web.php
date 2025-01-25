<?php

use App\Http\Controllers\BackEnd\DashboardController;
use App\Http\Controllers\BackEnd\PageController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(IndexController::class)->group(function (){
    Route::match(['get','post'],'/','index')->name('home');
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(DashboardController::class)->group(function (){
        Route::get('/dashboard','index')->name('dashboard');
    });
    Route::controller(PageController::class)->group(function (){
        Route::get('/pages','index')->name('pages');
        Route::prefix('pages')->group(function (){
            Route::get('/home','home')->name('home.page');
            Route::patch('/home','homeUpdate')->name('home.update');
            Route::get('/about','about')->name('about');
            Route::patch('/about','aboutUpdate')->name('about.update');
            Route::get('/contact','contact')->name('contact');
            Route::patch('/contact','contactUpdate')->name('contact.update');
            Route::get('/gallery','gallery')->name('gallery');
            Route::patch('/gallery','galleryUpdate')->name('gallery.update');
        });
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
