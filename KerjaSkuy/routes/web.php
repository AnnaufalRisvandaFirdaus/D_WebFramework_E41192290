<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\KerjaController;
use App\Http\Controllers\ProfilController;
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

//  Route::get('/', function () {
// return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


// Route::view('login', 'admin.login');

// Route::get('/login', function () {
//     return view('admin.login');
// });


// Route::resource('admin.perusahaan', PerusahaanController::class);


// admin
// Route::view('/dashboard', 'admin.dashboard');
// Route::view('/pekerjaan', 'admin.pekerjaan');
// Route::view('/perusahaan', 'admin.perusahaan');



Route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
Route::get('/edit-user/{id}', 'PenggunaController@edit')->name('edit-user');
Route::post('/update-user/{id}', 'PenggunaController@update')->name('update-user');
Route::get('/delete-user/{id}', 'PenggunaController@destroy')->name('delete-user');

// Route::view('/kategori', 'admin.kategori');

// admin
// Route::get('/perusahaan', 'kerjaController@index')->name('perusahaan');
// Route::get('/tambah','KerjaController@create')->name('tambah');
// Route::post('/simpan','KerjaController@store')->name('simpan');
// Route::get('/edit/{id}', 'KerjaController@edit')->name('edit');
// Route::post('/update/{id}', 'KerjaController@update')->name('update');
// Route::get('/delete/{id}', 'KerjaController@destroy')->name('delete');
// Route::post('/simpan', [KerjaController::class, 'store']);

// Route::get('/tambah', 'KerjaController@create')->name('tambah');
// Route::get('/tambah', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

// konten
// Route::get('/content', [ContenController::class, 'index']);

// user
// Route::view('/content', 'user.pencarian');
// Route::view('/tips', 'user.tips');
// Route::view('/profil', 'user.profil');
Auth::routes();



// // Route untuk pembagian Login admin
Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
// admin
Route::get('/perusahaan', 'kerjaController@index')->name('perusahaan');
Route::get('/tambah','KerjaController@create')->name('tambah');
Route::post('/simpan','KerjaController@store')->name('simpan');
Route::get('/edit/{id}', 'KerjaController@edit')->name('edit');
Route::post('/update/{id}', 'KerjaController@update')->name('update');
Route::get('/delete/{id}', 'KerjaController@destroy')->name('delete');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
});

// Route untuk pembagian Login user
    Route::view('/tips', 'user.tips');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');