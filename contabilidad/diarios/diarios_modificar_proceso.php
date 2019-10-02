<?php
include ("../../conexion/conexion.php");
$id=$_REQUEST['id'];
$fecha = $_POST['txt_fecha'];
$concepto = $_POST['txt_concepto'];
$modulo = $_POST['txt_modulo'];
$cuenta = $_POST['txt_cuenta'];
$referencia = $_POST['txt_referencia'];
$debe = $_POST['txt_debe'];
$haber = $_POST['txt_haber'];
$actualizar="UPDATE diarios SET drs_fecha='$fecha', drs_concepto='$concepto', drs_modulo='$modulo', drs_cuenta='$cuenta', drs_referencia='$referencia', drs_debe='$debe', drs_haber='$haber' WHERE drs_id='$id'"; 
$resultado=mysqli_query($conexion,$actualizar) or die(mysqli_error($conexion,$actualizar));
header("Location:diarios.php");
?>