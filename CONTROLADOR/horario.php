<?php 


require_once('../MODELO/conexion.php');
require_once('../MODELO/curso.php');

$curso =  new  curso();
session_start();

$grado=$_SESSION['listGrado'];
$seccion=$_SESSION['listSecc'];
$codigoDia="";
$codigoCargaLect="";

$txtDocente=$_POST['txtDocente'];
$txtCurso=$_POST['txtCurso'];
$txtIncio=$_POST['txtIncio'];
$txtFin=$_POST['txtFin'];

$rsDia=$curso->codigoDia($_GET['d']);
foreach ($rsDia as $key) {
	$codigoDia=$key['codigo_dia'];
	
}
$v="horariox";
$rsH=$curso->listar_para_horario($v,$grado,$seccion,$txtDocente,$txtCurso);
foreach ($rsH as $keyx) {
	$codigoCargaLect= $keyx['numero_cargaLect'];
}
$curso->registrarHorario($codigoCargaLect,$codigoDia,$txtIncio,$txtFin);
header("Location: ../VISTA/horario.php");
?>


<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>