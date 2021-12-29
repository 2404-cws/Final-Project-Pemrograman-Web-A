<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FullCalenderController;

use Illuminate\Support\Facades\Auth;

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
//     return view('home');
// });


Route::get('/data_merk', [MerkController::class, 'index'])->name('data_merk');
Route::get('/data_merk/add', [MerkController::class, 'add']);
Route::post('/data_merk/insert', [MerkController::class, 'insert']);
Route::get('/data_merk/delete{id}', [MerkController::class, 'delete']);
Route::get('/data_merk/edit{id}', [MerkController::class, 'edit']);
Route::post('/data_merk/update/{id}', [MerkController::class, 'update']);
Route::get('/exportexcel',[MerkController::class, 'exportexcel'])->name('exportexcel');


Route::get('/', [ProdukController::class, 'countProduct']);
Route::get('/data_produk', [ProdukController::class, 'index'])->name('data_produk');
Route::get('/data_produk/add', [ProdukController::class, 'add']);
Route::post('/data_produk/insert', [ProdukController::class, 'insert']);
Route::get('/data_produk/delete{id}', [ProdukController::class, 'delete']);
Route::get('/data_produk/edit{id}', [ProdukController::class, 'edit']);
Route::post('/data_produk/update/{id}', [ProdukController::class, 'update']);
Route::get('/exportexcel',[ProdukController::class, 'exportexcel'])->name('exportexcel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);

