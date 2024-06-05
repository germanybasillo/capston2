<?php

use App\Http\Controllers\Auth\LoginRegister;
use App\Http\Controllers\Page\LinkController;
use App\Http\Controllers\Usertype\Dashboard;
use App\Http\Controllers\Tenant\TenantLink;
use App\Http\Controllers\Bed\BedLink;
use App\Http\Controllers\BedAssign\Assignbed;
use App\Http\Controllers\Room\RoomLink;
use App\Http\Controllers\Suggestion\SuggestionLink;
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
Route::get('/invoice', [LinkController::class, 'invoice'])->name('invoice');
Route::get('/notice', [LinkController::class, 'notice'])->name('notice');
Route::get('/sms', [LinkController::class, 'sms'])->name('sms');

Route::get('/landlord', [Dashboard::class, 'landlord'])->name('landlord');
Route::get('/tenant', [Dashboard::class, 'tenant'])->name('tenant');

Route::resource('/tenants', TenantLink::class);
Route::post('/tenant-store', [TenantLink::class, 'store'])->name('tenant-store');
Route::put('/tenants/{id}', [TenantLink::class, 'update'])->name('tenants.update');

Route::resource('/rooms', RoomLink::class);
Route::post('/room-store', [RoomLink::class, 'store'])->name('room-store');
Route::put('/rooms/{id}', [RoomLink::class, 'update'])->name('rooms.update');

Route::resource('/beds', BedLink::class);
Route::post('/bed-store', [BedLink::class, 'store'])->name('bed-store');

Route::resource('/assigns', Assignbed::class);
Route::post('/assign-store', [Assignbed::class, 'store'])->name('assign-store');

Route::resource('/suggestions', SuggestionLink::class);
Route::post('/suggestion-store', [SuggestionLink::class, 'store'])->name('suggestion-store');