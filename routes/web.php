<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

//Route::get('/', 'App\Http\Controllers\formControler@form'); 

//Route::post('/form', 'App\Http\Controllers\formControler@postData') -> name('inputData');

Route::get('/blog', 'App\Http\Controllers\blogcontroller@index');

Route::get('/', function(){
    return view('welcome');
});
//Route::get('/data-mhs', function(){
 //   return view('data-mahasiswa');
//});
Route::get('/data-mhs', [MahasiswaController::class, 'index']);
Route::get('/tambah-data-mhs', [MahasiswaController::class, 'form']);
Route::post('/mhs/tambah', [MahasiswaController::class, 'tambah']);
Route::get('/edit-data-mhs/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mhs/edit/{id}', [MahasiswaController::class, 'update']);
Route::get('/hapus-data-mhs/{id}', [MahasiswaController::class, 'hapus']);
//Route::get('/data-mhs', 'App\Http\Controllers\MahasiswaController@index');
//Route::get('/tambah-data', 'App\Http\Controllers\MahasiswaController@form');
//Route::post('/mhs/tambah', 'App\Http\Controllers\MahasiswaController@tambah') -> name('/mhs/tambah');
//Route::get('/tambah-data-mhs', function(){
//    return view('tambah-data-mhs');
//});

