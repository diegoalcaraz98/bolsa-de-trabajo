@extends('layout.plantilla')

@section('title', 'registro')

@section('content')

@endsection

<style>
    .cont {
        position: absolute;
        top: 104px;
        left: 35px;
    }
    h2 {
        position: absolute;
        top: 51px;
        left: 50px;
    }

    .contenedor {
        position: absolute;
        top: 100px;
        left: 653px;
    }

    #us {
        position: absolute;
        top: 100px;
        left: 1px;
    }
    #us {
        position: absolute;
        top: 100px;
        left: 12px;
    }
    #pass {
        position: absolute;
        top: 148px;
        left: 12px;
    }
    .ini{
        position: absolute;
        left: 50px;
        border:2px solid black;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body style="background-color: rgb(48, 173, 161)">
    <div class="contenedor"style="background-color: rgb(19, 131, 165)">
        <h1> Inicio de sesion </h1>
        <br>
        <h2>Usuario</h2>
        <br>
        <input type="text" name="usuario" id="us" placeholder="usuario">
        <br>
        <h2 class="cont" >Contraseña</h2>
        <br>
        <input type="password" name="pas" id="pass" placeholder="contraseña">
        <br>
        <a href="vacante/show.blade.php" class="ini"style="background-color: aquamarine; border-radius: 15px;" >Iniciar sesion</a>
        <br>

    </div>
</body>

</html>
