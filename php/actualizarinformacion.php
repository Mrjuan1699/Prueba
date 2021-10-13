<?php 
require_once "conexion.php";
$conexion=conectarBD();
$id=$_POST['id'];
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$fecnac=$_POST['fecnac'];
$dir=$_POST['dir'];
$tfno=$_POST['telefono'];



$sql="UPDATE tbl_personas set DNI='$dni',
NOMBRE='$nombre',
FECNAC='$fecnac',
DIR='$dir',
TFNO='$tfno'

where IdPersona='$id'";


echo $resultado =mysqli_query($conexion,$sql);
?>