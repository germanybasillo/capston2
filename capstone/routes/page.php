
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\LinkController;


Route::get('/index', [LinkController::class, 'index'])->name('index');
Route::get('/invoice', [LinkController::class, 'invoice'])->name('invoice');
Route::get('/notice', [LinkController::class, 'notice'])->name('notice');
Route::get('/sms', [LinkController::class, 'sms'])->name('sms');
Route::get('/bill', [LinkController::class, 'bill'])->name('bill');
Route::get('/income', [LinkController::class, 'income'])->name('income');
Route::get('/history', [LinkController::class, 'history'])->name('history');
Route::get('/collect', [LinkController::class, 'collect'])->name('collect');