<?php
require __DIR__.'/admin.php';
require __DIR__.'/room.php';
require __DIR__.'/page.php';
require __DIR__.'/auth.php';
require __DIR__.'/assign.php';
require __DIR__.'/bed.php';
require __DIR__.'/bill.php';
require __DIR__.'/dashboard.php';
require __DIR__.'/payment.php';
require __DIR__.'/suggesion.php';
require __DIR__.'/tenant.php';
require __DIR__.'/page.php';

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.index');
});




