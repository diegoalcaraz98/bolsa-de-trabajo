<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    table {
        border-style: solid;
        border-color: black;
        border-collapse: separate;

    }

    .tr {
        
        border-color: black;

    }
</style>

<body class="fon">
    
    @csrf
    <nav class="arriba">
        <img src="./imagenes/logo.jpg" alt="foto" class="logo">
        <h3 class="bol">Bolsa de trabajo</h3><br>
        <h4 class="trab">tu mejor opcion para encontrar trabajo</h>
    </nav>
    <div>
            <table>
                <tr>
                    <th>Empresa:</th> <td></td>
                    

                </tr>
                <tr>
                    <th>Vacante:</th>
                </tr>
                <tr>
                    <th>Descripcion<br>de<br>la&nbspvacante:</th>
                </tr>
                <tr><th>Duracion:</th></tr>
            </table>
    </div>
</body>

</html>
<?php
$user = "root";
$pass = "";
$host = "localhost";
$empresa=$_POST["nombre"];
$empresa=$_POST["vacante"];
$empresa=$_POST["desvacante"];
$empresa=$_POST["duracion"];
$conecction = mysqli_connect($host, $user, $pass);
 if ($coneection) {
     echo "no se pudo conectar con el servidor".mysqli_error();
 }
 else {
    echo "servidor conectado";
 }
$datab="empresas";
$db = mysqli_selectdb($connection,$data);
if($db){
    echo "No se ha podido encontrar la tabla";
}
else{
    echo "Tabla conectada";
}
$consulta = "SELECT nombre,vacante,desvacante,duracion fROM empresa";
$resultado = mysqli_query($connection);

$resultado = mysqli_query($connectionm,$consulta);
if (!$resultados) {
    echo "no se pudo realizar la consulta";
} else {
    echo "<table>;";
    echo "<th>id</th>";
    echo "<th>nombre</th>";
    echo "<th>vacante</th>";
    echo "<th>desvacante</th>";
    echo "<th>duracion</th>";
}

