<?php
require_once("../MODELO/conexion.php");
require_once("../MODELO/aula.php");
$aula= new aula();
$val= "";
$txtUbig="";
$txtGrado="";
$txtSecc="";
$txtCapac="";
$cboEstado="";
$cboNivel="";
$txtCodigoA="";
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


if(isset($_POST['cboNivel'])&&isset($_POST['txtUbig'])&&isset($_POST['txtGrado']) &&isset($_POST['txtSecc'])&&isset($_POST['txtCapac'])&&isset($_POST['cboEstado'])){
$cboEstado=$_POST['cboEstado'];
$txtUbig=$_POST['txtUbig'];
$txtGrado= $_POST['txtGrado'];
$txtSecc=strtoupper($_POST['txtSecc']);
$txtCapac=$_POST['txtCapac'];
$cboNivel=$_POST['cboNivel'];

}

$aula->regi_modificar_del_sclases($val,$txtCodigoA,$txtUbig,$txtGrado,$txtSecc,$txtCapac,$cboEstado,$cboNivel);
if($val==="registrar"){header("Location: ../VISTA/sclases.php?m=1");}
	if($val==="update"){header("Location: ../VISTA/sclases.php?m=2");}
		if($val==="delete"){header("Location: ../VISTA/sclases.php?m=3");}

?>
