<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

Route::get('/users', function () {
    return view('user');
})->name('user');

Route::get('/icons', function () {
    return view('icons');
})->name('icons');
Route::get('/maps', function () {
    return view('maps');
})->name('maps');
Route::get('/notif', function () {
    return view('notifications');
})->name('notif');
Route::get('/tables', function () {
    return view('tables');
})->name('tables');
Route::get('/typo', function () {
    return view('typo');
})->name('info');
Route::get('/info', function () {
    return view('info');
})->name('info');
Route::get('/syarat', function () {
    return view('syarat');
})->name('syarat');