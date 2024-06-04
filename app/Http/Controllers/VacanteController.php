<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index(){
        return "pagina de vacante";
    }
    public function create(){
        return "puedes crear un vacante";
    }
    public function show($vacante){
        return "bienvenido a la vacante: $vacante";
    }
}
