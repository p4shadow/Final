<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitularController;
use App\Http\Controllers\AutomotorController;
use App\Http\Controllers\InfraccionController;
use App\Models\Automotor;
use App\Models\Infraccion;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('welcome');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Rutas para Titulares
    Route::resource('titulares', TitularController::class);

    // Rutas para Automotores
    Route::resource('automotores', AutomotorController::class);
    
    // Rutas para Infracciones
    Route::resource('infracciones', InfraccionController::class);
    
});

require __DIR__.'/auth.php';
