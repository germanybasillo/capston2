<?php

use App\Http\Controllers\Auth\LoginRegister;
use App\Http\Controllers\Page\LinkController;
use App\Http\Controllers\Usertype\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginRegister::class, 'login'])->name('login');
Route::post('/login', [LoginRegister::class, 'validate_login'])->name('validate_login');
Route::get('/register', [LoginRegister::class, 'register'])->name('register');
Route::post('/register', [LoginRegister::class, 'validate_register'])->name('validate_register');
Route::get('/logout',  [LoginRegister::class, 'logout'])->name('logout');


Route::get('/index', [LinkController::class, 'index'])->name('index');

Route::get('/landlord', [Dashboard::class, 'landlord'])->name('landlord');