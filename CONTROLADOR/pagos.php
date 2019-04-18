<?php
require_once("../MODELO/conexion.php");
require_once("../MODELO/pagos.php");
$pago= new pagos();
$val= "";
$codigo="";
$txtNombrePago="";
$txtValor="";
$txtCaracteristicas="";
$cboTipo="";

if(!isset($_POS['px'])){
	$val= "registrar";
}
if(isset($_POST['px'])){
	$val= "update";
	$codigo=$_POST['px'];
}
if(isset($_GET['x'])){
	$val= "delete";
	$codigo=$_GET['x'];
}


if(isset($_POST['txtNombrePago'])&&isset($_POST['txtValor']) &&isset($_POST['txtCaracteristicas'])&&isset($_POST['cboTipo'])){

$txtNombrePago=$_POST['txtNombrePago'];
$txtValor=$_POST['txtValor'];
$txtCaracteristicas= $_POST['txtCaracteristicas'];
$cboTipo=$_POST['cboTipo'];

}



$pago->regi_modificar_del($val,$codigo,$txtNombrePago,$txtValor,$txtCaracteristicas,$cboTipo);
	
if($val==="registrar"){header("Location: ../VISTA/pagos.php?m=1");}
	if($val==="update"){header("Location: ../VISTA/pagos.php?m=2");}
		if($val==="delete"){header("Location: ../VISTA/pagos.php?m=3");}

?>
