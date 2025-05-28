<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ke halaman data diri
Route::get('/data-diri/Pertama.blade.php', function () {
    return view('data-diri.Pertama');
});