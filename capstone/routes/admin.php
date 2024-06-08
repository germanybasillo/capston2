<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Middleware\RedirectIfAdminAuthenticated;

Route::middleware([RedirectIfAdminAuthenticated::class])->group(function () {
    Route::get('/admin_login', [AdminController::class,'admin_login'])->name('admin_login');
    Route::post('/admin', [AdminController::class,'admin_validate'])->name('admin_validate');
    Route::get('/admin_logout', [AdminController::class,'admin_logout'])->name('admin_logout');
    Route::get('/admin', [AdminController::class,'admin'])->name('admin');
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');

});

