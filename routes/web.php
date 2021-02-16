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
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/casos', function () {
    return view('casos');
});
Route::get('/blog', function () {
    return view('blog');
});
