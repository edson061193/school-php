<?php
require_once("../MODELO/conexion.php");
require_once("../MODELO/asignaturas.php");
$asigantura= new asignaturas();
$val= "";

$txtCodigoA="";
$txtNombreA="";
$txtHteoriaA="";
$txtHpracA="";
$cboGrado="";
$cboNivel="";

if(!isset($_POS['px'])){
	$val= "registrar";
}
if(isset($_POST['px'])){
	$val= "update";
	$txtCodigoA=$_POST['px'];
}
if(isset($_GET['x'])){
	$val= "delete";
	$txtCodigoA=$_GET['x'];
}


if(isset($_POST['cboNivel'])&&isset($_POST['txtCodigoA'])&&isset($_POST['txtNombreA']) &&isset($_POST['txtHteoriaA'])&&isset($_POST['txtHpracA'])&&isset($_POST['cboGrado'])){

$txtCodigoA=$_POST['txtCodigoA'];
$txtNombreA=$_POST['txtNombreA'];
$txtHteoriaA= $_POST['txtHteoriaA'];
$txtHpracA=$_POST['txtHpracA'];
$cboGrado=$_POST['cboGrado'];
$cboNivel=$_POST['cboNivel'];
}
if(isset($_POST['txtHteoriaA'])&&isset($_POST['txtHpracA'])){

$txtHteoriaA= $_POST['txtHteoriaA'];
$txtHpracA=$_POST['txtHpracA'];

}



$asigantura->regi_modificar_del_asig($val,$txtCodigoA,$txtNombreA,$txtHteoriaA,$txtHpracA,$cboNivel,$cboGrado);
if($val==="registrar"){header("Location: ../VISTA/asignatura.php?m=1");}
	if($val==="update"){header("Location: ../VISTA/asignatura.php?m=2");}
		if($val==="delete"){header("Location: ../VISTA/asignatura.php?m=3");}

?>
