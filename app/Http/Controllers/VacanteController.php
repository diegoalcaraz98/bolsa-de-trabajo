<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function index(){
        return view("vacante.index");
    }
    public function create(){
        return view("vacante.create");
    }
    public function store(Request $request){
        $vacante=new VacanteController();
        $vacante->nombre=$request->nombre;
        
        
        
    }
    public function show($vacante){
        return view("vacante.show", ['vacante'=>$vacante]);
    }
}
