<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/node', [App\Http\Controllers\ComproController::class, 'node'])->name('node');
Route::get('/vacancy', [App\Http\Controllers\ComproController::class, 'vacancy'])->name('vacancy');
Route::get('/pi-mall', [App\Http\Controllers\ComproController::class, 'piMall'])->name('piMall');
Route::get('/investor', [App\Http\Controllers\ComproController::class, 'investor'])->name('investor');
Route::get('/branchoffice', [App\Http\Controllers\ComproController::class, 'branchoffice'])->name('branchoffice');
Route::get('/careers', [App\Http\Controllers\ComproController::class, 'career'])->name('career');
Route::get('/help', [App\Http\Controllers\ComproController::class, 'help'])->name('help');
Route::get('/trust', [App\Http\Controllers\ComproController::class, 'trust'])->name('trust');
Route::get('/marketplace', [App\Http\Controllers\ComproController::class, 'piMall'])->name('marketplace');
