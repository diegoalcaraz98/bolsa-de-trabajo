<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
    .arriba {
        background-color: aquamarine;
    }

    .logo {
        width: 50px;
        height: 50px;
    }

    .bol {
        position: absolute;
        top: -4px;
        left: 62px;
    }

    .trab {
        position: absolute;
        top: 11px;
        left: 62px;
    }
    .formulario{
        position: absolute;
        top: 72px;
        left: 600px;
    }
</style>

<body style="background-color: rgb(48, 173, 161)">
    <nav class="arriba">
        <img src="../imagenes/logo.jpg" alt="foto" class="logo">
        <h3 class="bol">Bolsa de trabajo</h3><br>
        <h4 class="trab">tu mejor opcion para encontrar trabajo</h>
    </nav>
    <form action="{{route('vacante.store')}}" method="POST" class="formulario">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" placeholder="Nombre de la empresa">
        </label>
        <br>
        <label>
            Vacante:
            <br>
            <input type="text" name="vacantes" placeholder="Nombre de la vacante">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="Descvacamte"rows="10" placeholder="Descripcion del curso"></textarea>
        </label>
        <br>
        <label>
            Duracion:
            <br>
            <input type="text" name="Duracion del curso" id="" placeholder="Duracion del curso">
        </label>
        <br><br>
        <label>
            <button type="submit">Guardar</button>
        </label>
        <br>
    </form>
</body>

</html>
