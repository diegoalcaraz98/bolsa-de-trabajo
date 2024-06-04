<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',HomeController::class);
Route::get('vacante',function(){
    return "pagina de vacante";
});
Route::get('vacante/create',function(){
    return "puedes crear un vacante";
});
Route::get('vacante/{vacante}/{descv?}', function ($vacante,$descv = null) {
    if ($descv) {
        return "estas en la pagina de la: $vacante, esta es su descripción $descv";
    }
    else{
        return "estas en la pagina de la vacante: $vacante, pulsa aqui para ver la descripcion de la vacante";
    }
   
});