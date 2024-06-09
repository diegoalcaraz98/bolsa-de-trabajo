<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\UsuariosController;
use Faker\Guesser\Name;

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

Route::get('/', HomeController::class);
Route::get('vacante', [VacanteController::class, 'index'])->name('vacante.index');
Route::get('vacante/create', [VacanteController::class, 'create'])->name('vacante.create');
Route::post('vacante', [VacanteController::class, 'store'])->name('vacante.store');
Route::get('vacante/{vacante}', [VacanteController::class, 'show'])->name('vacante.show');