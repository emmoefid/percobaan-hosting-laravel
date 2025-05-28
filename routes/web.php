<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ke halaman data diri
Route::get('/data-diri/Pertama', function () {
    return view('data-diri.Pertama');
});

// ke halaman tambah data diri
Route::get('/data-diri/Create', function () {
    return view('data-diri.Create');
});

// hasil tambah data diri
Route::post('/data-diri/AdditionResult', function () {
    // Logika untuk menyimpan data diri
    return view('data-diri.AdditionResult')->with('success', 'Data berhasil ditambahkan!');
});