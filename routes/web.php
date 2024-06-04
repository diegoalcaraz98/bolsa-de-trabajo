<?php

use Illuminate\Support\Facades\Route;

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
    return "inicio";
});
Route::get('cursos',function(){
    return "pagina de cursos";
});
Route::get('cursos/create',function(){
    return "puedes crear un curso";
});
Route::get('cursos/{curso}',function($curso){
    return "pagina de curso: $curso";
});
