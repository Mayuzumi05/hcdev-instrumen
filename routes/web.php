<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CartController;

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

Route::group(['middleware' => ['auth', 'cekunit:0']], function () {
    //User
    // Route::get('/home', [Controller::class, 'home'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user', [UserController::class, 'index'])->name('user'); 
    Route::post('/setting/update/{id}', [SettingController::class, 'update'])->name('update');
    Route::post('/setting/updatepassword/{id}', [SettingController::class, 'updatepassword'])->name('update');
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::post('/user/updatestatus/{id}', [UserController::class, 'updatestatus'])->name('updatestatus');
    Route::post('/user/rejectstatus/{id}', [UserController::class, 'rejectstatus'])->name('rejectstatus');

    Route::get('/pindah', [PindahController::class, 'index'])->name('product.pindah');

    Route::get('/history', [HistoryController::class, 'index'])->name('product.history');

    Route::get('/notification', [NotificationController::class, 'index'])->name('product.notification');

    Route::get('/setting', [SettingController::class, 'setting'])->name('setting');

    //Cart
    Route::post('/cartstore', [CartController::class, 'store'])->name('cart.store');
    Route::get('/cartdelete', [CartController::class, 'delete'])->name('cart.delete');
    Route::get('/cartupdate', [CartController::class, 'update'])->name('cart.update');

    //CRUD Barang
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::post('/barang/store', [BarangController::class, 'store'])->name('store');
    Route::post('/barang/update/{id}', [BarangController::class, 'update'])->name('update');
    Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy'])->name('destroy');
    Route::get('/exportbarang', [BarangController::class, 'barangExport'])->name('exportbarang');
    Route::post('/importbarang', [BarangController::class, 'barangImport'])->name('importbarang');
});

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/saveregister', [UserController::class, 'saveregister'])->name('saveregister');

// Route::get('/home', [Controller::class, 'home'])->name('product.home');

// Route::get('/user', [Controller::class, 'user'])->name('product.user');