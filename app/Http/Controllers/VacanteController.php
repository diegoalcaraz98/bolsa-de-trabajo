<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacanteController extends Controller
{
    protected $nombre;
    protected $vacante;
    protected $desvacante;
    protected $duracion;
    public function save(){}

    public function index(){
        return view("vacante.index");
    }
    public function create(){
        return view("vacante.create");
    }
    public function stringValue(){

    }
    public function store(Request $request){
        $vacante = new VacanteController();
        $vacante->nombre= $request->nombre;
        $vacante->vacante= $request->vacante;
        $vacante->desvacante= $request->desvacante;
        $vacante->duracion= $request->duracion;
        $vacante->save();

        return view('vacante.create');
        
    }
    public function show($vacante){
        return view("vacante.show", ['vacante'=>$vacante]);
    }
}
