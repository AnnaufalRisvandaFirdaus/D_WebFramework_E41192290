<?php

use App\Http\Controllers\ContenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PenggunaController;
use App\Models\conten;
use App\Models\PerusahaanModel;

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
// Route::get('/', function () {
//     return view('welcome')
// });
Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


// Route::view('login', 'admin.login');

// Route::get('/login', function () {
//     return view('admin.login');
// });


Route::resource('admin.perusahaan', PerusahaanController::class);

Route::get('/register', function () {
    return view('user.register');
});

// admin
Route::view('/dashboard', 'admin.dashboard');
Route::view('/pekerjaan', 'admin.pekerjaan');
// Route::view('/perusahaan', 'admin.perusahaan');
Route::get('/perusahaan', [PerusahaanController::class, 'index']);
Route::get('/pengguna', [PenggunaController::class, 'index']);
// Route::view('/kategori', 'admin.kategori');
Route::get('/tambah', [PerusahaanController::class, 'create']);
Route::get('/edit/{id}', [PerusahaanController::class, 'edit']);
Route::post('/simpan-perusahaan', [PerusahaanController::class, 'store'])->name('simpan-perusahaan');



// user
// Route::view('/content', 'user.pencarian');
Route::view('/tips', 'user.tips');
Route::view('/profil', 'user.profil');
// Route::get('/user/content', [ContenController::class, 'show']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Route untuk pembagian Login admin
Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
    //     Route::view('/dashboard', 'admin.dashboard');
    //     Route::view('/pekerjaan', 'admin.pekerjaan');
    //     Route::view('/perusahaan', 'admin.perusahaan');
    //     Route::view('/pengguna', 'admin.pengguna');
    //     Route::view('/kategori', 'admin.kategori');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});

// // Route untuk pembagian Login user
// Route::group(['middleware' => ['auth', 'CekLevel:user']], function () {
//     Route::view('/content', 'user.pencarian');
//     Route::view('/tips', 'user.tips');
//     Route::view('/profil', 'user.profil');
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
// });

// Route::get('/user/content', 'ContenController@index');
