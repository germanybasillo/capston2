<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Middleware\RedirectIfAdminAuthenticated;

Route::middleware([RedirectIfAdminAuthenticated::class])->group(function () {
    Route::get('/admin', [AdminController::class,'admin'])->name('admin');
    Route::post('/admin', [AdminController::class,'admin_validate'])->name('admin_validate');
});

