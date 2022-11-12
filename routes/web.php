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
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/planes', function () {
    return view('planes');
});

Route::get('/register_especial', function () {
    return view('registro_especialista');
});


Route::get('/doctor/dashboard', function () {
    return view('doctor/dashboard');
});
Route::get('/doctor/messages', function () {
    return view('doctor/messages');
});
