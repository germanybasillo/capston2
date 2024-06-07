<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Room\RoomLink;



Route::resource('/rooms', RoomLink::class);
Route::post('/room-store', [RoomLink::class, 'store'])->name('room-store');
Route::put('/rooms/{id}', [RoomLink::class, 'update'])->name('rooms.update');