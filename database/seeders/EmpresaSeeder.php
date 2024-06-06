<?php

namespace Database\Seeders;
use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new Empresa;
        $empresa->nombre='avanza solido';
        $empresa->vacante='Administrador de base de datos';
        $empresa->desvacante='te encargaras de administrar la base de datos así como curarla y mejorar la base de datos';
        $empresa->duracion='el trabajo es por tiempo indefinido';
        $empresa->save();
        $empresa2 = new Empresa;
        $empresa2->nombre='Ambar rojo';
        $empresa2->vacante='Administrador de base de datos';
        $empresa2->desvacante='te encargaras de administrar la base de datos así como curarla y mejorar la base de datos';
        $empresa2->duracion='el trabajo es por tiempo indefinido, de lunes a viernes';
        $empresa2->save();
    }
}