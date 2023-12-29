<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SettingController;

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
    //User
    // Route::get('/home', [Controller::class, 'home'])->name('home');
    Route::get('/home', [UserController::class, 'userwithid'])->name('home');
    Route::get('/user', [UserController::class, 'index'])->name('user'); 
    Route::post('/setting/update/{id}', [UserController::class, 'update'])->name('update');
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');

    Route::get('/pindah', [PindahController::class, 'index'])->name('product.pindah');

    Route::get('/history', [HistoryController::class, 'index'])->name('product.history');

    Route::get('/notification', [NotificationController::class, 'index'])->name('product.notification');

    Route::get('/setting', [SettingController::class, 'setting'])->name('setting');

    //CRUD Barang
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('store');
    Route::post('/barang/update/{id}', [BarangController::class, 'update'])->name('update');
    Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('destroy');
    Route::get('/exportbarang', [BarangController::class, 'barangExport'])->name('exportbarang');
    Route::post('/importbarang', [BarangController::class, 'barangImport'])->name('importbarang');
});

Route::get('/register', [Controller::class, 'register'])->name('user.register');

Route::post('/saveregister', [UserController::class, 'saveregister'])->name('saveregister');

// Route::get('/home', [Controller::class, 'home'])->name('product.home');

// Route::get('/user', [Controller::class, 'user'])->name('product.user');