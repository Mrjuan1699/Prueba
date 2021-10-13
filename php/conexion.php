<?php

function conectarBD(){
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "personas";
    

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

    return $conexion;

}

?>