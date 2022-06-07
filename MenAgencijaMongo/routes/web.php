<?php

use App\Models\Agencija;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrzavaController;
use App\Http\Controllers\AgencijaController;
use Illuminate\Database\Eloquent\Collection;
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

//  Agencija
Route::get('/',[AgencijaController::class,'show'])->name('pocetna');
Route::get('/create',[AgencijaController::class,'create'])->name('agencijaCreate');
Route::post('/store',[AgencijaController::class,'store'])->name('storeAgenciju');
Route::delete('/agencija/{id}',[AgencijaController::class,'delete'])->name('deleteAgencija');
Route::get('/edit/{id}',[AgencijaController::class,'edit'])->name('editAgenciju');
Route::put('/agencija/{id}',[AgencijaController::class,'update'])->name('spremiPromjene');

//  Država
Route::get('/drzave/index',[DrzavaController::class,'index'])->name('drzave');
Route::get('/drzava/create',[DrzavaController::class,'create'])->name('create');
Route::post('/drzava/store',[DrzavaController::class,'store'])->name('storeDrzavu');
Route::delete('/drzava/{id}',[DrzavaController::class,'delete'])->name('deleteDrzava');
Route::get('/drzava/edit/{id}',[DrzavaController::class,'edit'])->name('editDrzava');
Route::put('/drzava/update/{id}',[DrzavaController::class,'update'])->name('drzavaUpdate');

//  Nogometaš
Route::get('/nogometas/index',[NogometasController::class,'index'])->name('nogometasPocetna');
Route::get('/nogometas/create',[NogometasController::class,'create'])->name('createNogometas');
Route::post('/nogometas/store',[NogometasController::class,'store'])->name('storeNogometas');
Route::delete('/nogometas/{id}',[NogometasController::class,'delete'])->name('deleteNogometas');
Route::get('/nogometas/edit/{id}',[NogometasController::class,'edit'])->name('editNogometas');
Route::get('/nogometas/show/{id}',[NogometasController::class,'show'])->name('showNogometas');
Route::put('/nogometas/update/{id}',[NogometasController::class,'update'])->name('updateNogometas');

//  Agencija i nogometaš
Route::get('/index/{id}',[UgovorAgencijaController::class,'index'])->name('prikazKlijenata');
Route::get('/klijenti/create/{id}',[UgovorAgencijaController::class,'create'])->name('klijentiCreate');
Route::post('/klijenti/store/{id}',[UgovorAgencijaController::class,'store'])->name('storeKlijent');
Route::delete('/klijent/{id}',[UgovorAgencijaController::class,'delete'])->name('deleteUgovorAgencija');
Route::get('/ugovor/edit/{id}',[UgovorAgencijaController::class,'edit'])->name('editUgovor');
Route::put('/ugovor/{id}',[UgovorAgencijaController::class,'update'])->name('spremiPromjeneUgovor');