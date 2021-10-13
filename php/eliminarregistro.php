<?php
require_once "conexion.php";
$conexion=conectarBD();
$id=$_POST['id'];

$sql = "DELETE from tbl_personas where IdPersona ='$id'";
echo $resultado =mysqli_query($conexion,$sql);
?> 