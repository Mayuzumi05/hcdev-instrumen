<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'cekunit:1,2,3,4,5,6,7,8']], function () {
    Route::get('/home', [Controller::class, 'home'])->name('home');
    Route::get('/user', [UserController::class, 'index'])->name('user'); 
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::post('/setting/update/{id}', [UserController::class, 'update'])->name('update');
});

Route::get('/register', [Controller::class, 'register'])->name('user.register');

Route::post('/saveregister', [UserController::class, 'saveregister'])->name('saveregister');

// Route::get('/home', [Controller::class, 'home'])->name('product.home');

// Route::get('/user', [Controller::class, 'user'])->name('product.user');

Route::get('/pindah', [Controller::class, 'pindah'])->name('product.pindah');

Route::get('/barang', [Controller::class, 'barang'])->name('product.barang');

Route::get('/history', [Controller::class, 'history'])->name('product.history');

Route::get('/notification', [Controller::class, 'notification'])->name('product.notification');

Route::get('/setting', [Controller::class, 'setting'])->name('product.setting');