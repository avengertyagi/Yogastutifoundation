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
    return view('index');
});
Route::get('Corporate/', function () {
    return view('Corpate');
});
Route::get('Pre&Post/', function () {
    return view('Prepost');
});
Route::get('Meditation/', function () {
    return view('Meditation');
});
Route::get('Shirodhara/', function () {
    return view('Shirodhara');
});