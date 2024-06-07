<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');