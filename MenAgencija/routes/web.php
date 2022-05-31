<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencijaController;
use App\Http\Controllers\NogometasController;
use App\Http\Controllers\UgovorAgencijaController;

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

Route::get('/',[AgencijaController::class,'index'])->name('pocetna');
Route::get('create',[AgencijaController::class,'create'])->name('agencijaCreate');
Route::post('store',[AgencijaController::class,'store'])->name('storeAgenciju');
Route::delete('agencija/{id}',[AgencijaController::class,'delete'])->name('deleteAgencija');
Route::get('edit/{id}',[AgencijaController::class,'edit'])->name('editAgenciju');
Route::put('agencija/{id}',[AgencijaController::class,'update'])->name('spremiPromjene');

Route::get('index/{id}',[UgovorAgencijaController::class,'index'])->name('prikazKlijenata');
Route::get('klijenti/create/{id}',[UgovorAgencijaController::class,'create'])->name('klijentiCreate');
Route::post('klijenti/store/{id}',[UgovorAgencijaController::class,'store'])->name('storeKlijent');
Route::delete('klijent/{id}',[UgovorAgencijaController::class,'delete'])->name('deleteUgovorAgencija');
Route::get('ugovor/edit/{id}',[UgovorAgencijaController::class,'edit'])->name('editUgovor');
Route::put('ugovor/{id}',[UgovorAgencijaController::class,'update'])->name('spremiPromjeneUgovor');

