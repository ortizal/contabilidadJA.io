<?php
include ("../../conexion/conexion.php");
$id=$_REQUEST['id'];
$eliminar="DELETE FROM diarios  WHERE drs_id='$id'"; 
$resultado=mysqli_query($conexion,$eliminar) or die(mysqli_error($conexion,$eliminar));
header("Location:diarios.php");
?>