@extends('layout.plantilla')

@section('title', 'show')

@section('content')
    <h1>bienvenido a la vacante <?php echo $vacante; ?></h1>
    <img src="../imagenes/logo.jpg" alt="foto">
@endsection