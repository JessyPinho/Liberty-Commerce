<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\RegisterController;
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
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/reset', function () {
    return view('reset');
});

Route::get('/produit', function () {
    return view('produit');
});

Route::get('/panier', function () {
    return view('panier');
});

Route::get('/catalogue', function () {
    return view('catalogue');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/subject', function () {
    return view('subject');
});

Route::get('/Auth', function() {
    return view('Auth');
});

Route::post('/register', [RegisterController::class, "store"]);

Route::post('/login', [LoginController::class, "authenticate"]);

Route::post('/reset', [ResetController::class, "authenticate"]);

Route::get('/admin',function() {
    return view ('admin');
});

Route::get('logout', '\App\Http\Controllers\LoginController@logout');

Route::post('garder', [ImageController::class, "store"]);