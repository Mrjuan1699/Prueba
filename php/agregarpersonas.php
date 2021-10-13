<?php 
require_once "conexion.php";
$conexion=conectarBD();
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$fecnac=$_POST['fecnac'];
$dir=$_POST['dir'];
$tfno=$_POST['telefono'];

$sql = "INSERT into tbl_personas(DNI, NOMBRE, FECNAC, DIR, TFNO)
values ('$dni','$nombre','$fecnac','$dir','$tfno')";

echo $resultado =mysqli_query($conexion,$sql);
?>