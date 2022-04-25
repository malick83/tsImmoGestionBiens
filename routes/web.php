<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\ProprietaireController;

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
})->name('proprietes.home');



Route::get('/proprietes', [ProprieteController::class, 'index'])->name('proprietes.index');
Route::get('/proprietaires', [ProprietaireController::class, 'index'])->name('proprietaires.index');

Route::get('/proprietes/create', [ProprieteController::class,'create'])->name('proprietes.create');
Route::get('/proprietaires/create', [ProprietaireController::class,'create'])->name('proprietaires.create');
Route::post('/proprietaires/store', [ProprietaireController::class,'store'])->name('proprietaires.store');
Route::post('/proprietes/store', [ProprieteController::class,'store'])->name('proprietes.store');
Route::get('/proprietes/{propriete}', [ProprieteController::class, 'show'])->name('proprietes.show');
Route::get('/proprietes/delete/{propriete}', [ProprieteController::class, 'delete'])->name('proprietes.delete');
Route::get('/proprietaires/delete/{proprietaire}', [ProprietaireController::class, 'delete'])->name('proprietaires.delete');
Route::get('/proprietes/update-show/{propriete}', [ProprieteController::class, 'showdata'])->name('proprietes.showdata');
Route::put('/proprietes/update/{propriete}', [ProprieteController::class, 'update'])->name('proprietes.update');
