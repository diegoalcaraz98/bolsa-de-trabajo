<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index(){
        return view('vacante.index');
    }
    public function create(){
    }
    public function show($vacante){
    }
}
