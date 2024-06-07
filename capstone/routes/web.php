
<?php
require __DIR__ . '/route_includes.php';


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.index');
});




