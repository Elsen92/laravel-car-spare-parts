<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\OilController;
use App\Http\Controllers\Admin\SparePartController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\AddressController;
















Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/ehtiyyat_hisseleri', [FrontController::class, 'ehtiyyatHisseleri'])->name('ehtiyyat_hisseleri');
Route::get('/yaglar', [FrontController::class, 'oils'])->name('oils');
Route::get('/haqqimizda', [FrontController::class, 'about'])->name('about');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');

Route::get('/admin', function () {
    return redirect()->route('admin.auth.login');
});


    Route::prefix('admin')->group(function () {

        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.auth.login');
        Route::post('/login', [AuthController::class, 'login'])->name('admin.login');

        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::middleware(['auth'])->group(function () {

            Route::get('/dashboard', function () {
                return view('admin.layouts.admin');
            })->name('admin.dashboard');
        });
    });


Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Yağlar səhifəsi
    Route::get('/oils', [OilController::class, 'index'])->name('admin.oils.index');
    Route::get('/oils/create', [OilController::class, 'create'])->name('admin.oils.create');
    Route::post('/oils', [OilController::class, 'store'])->name('admin.oils.store');
    Route::delete('/oils/{oil}', [OilController::class, 'destroy'])->name('admin.oils.destroy');
});


Route::get('/search', [OilController::class, 'search'])->name('search');
Route::get('/oil{id}', [OilController::class, 'show'])->name('oil.details');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('spare-parts', [SparePartController::class, 'index'])->name('spare_parts.index');

    Route::get('spare-parts/create', [SparePartController::class, 'create'])->name('spare_parts.create');

    Route::post('spare-parts', [SparePartController::class, 'store'])->name('spare_parts.store');

    Route::get('spare-parts/{sparePart}/edit', [SparePartController::class, 'edit'])->name('spare_parts.edit');

    Route::put('spare-parts/{sparePart}', [SparePartController::class, 'update'])->name('spare_parts.update');

    Route::delete('spare-parts/{sparePart}', [SparePartController::class, 'destroy'])->name('spare_parts.destroy');
});


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

Route::get('/admin/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
Route::post('/admin/addresses', [AddressController::class, 'store'])->name('addresses.store');
Route::get('/footer', [AddressController::class, 'showFooter']);
Route::post('/admin/addresses', [AddressController::class, 'store'])->name('addresses.store');


