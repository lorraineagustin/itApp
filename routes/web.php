<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/itform', function () {
    return view('form');
});

Route::get('/documents', function () {
    return view('tray');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/managers', function () {
    return view('managers');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
