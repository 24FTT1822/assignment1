<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contacts', function () { return view('contacts'); })->name('contacts');

Route::get('/highlighted1', function () { return view('highlighted1'); })->name('highlighted1');
Route::get('/highlighted2', function () { return view('highlighted2'); })->name('highlighted2');
Route::get('/latest1', function () { return view('latest1'); })->name('latest1');
Route::get('/latest2', function () { return view('latest2'); })->name('latest2');
Route::get('/latest3', function () { return view('latest3'); })->name('latest3');

