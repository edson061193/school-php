<?php 
$docen= $_POST['txt_docente'];
$a_academico=$_POST['txt_academico'];
$grado=$_POST['cboGrdo'];
$seccion=$_POST['cboSeccion'];
$curso_nomb=$_POST['txt_curso'];
$codigo_docente="";
$codigo_aula="";
$codigo_curso="";
require_once '../MODELO/docente.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/matricula.php';
require_once '../MODELO/curso.php';
$docente = new docente();
$matricula= new matricula();
$curso = new curso();

$ret_docn=$docente->busca_docente($docen,$docen,$docen);
while($rs=mysqli_fetch_array($ret_docn)){
	$codigo_docente=$rs['codigo_docente'];
}

$result_carga=$matricula->select_grado_Seccion($grado,$seccion);
while($row=mysqli_fetch_array($result_carga)){
	$codigo_aula=$row['codigo_aula'];
}

$rs_curso=$curso->seleccionCurso($curso_nomb);
while ($row1 = mysqli_fetch_array($rs_curso)) {
    $codigo_curso=$row1['codigo_curso'];
}

$curso->insert_carga_lectiva($codigo_docente, $codigo_curso, $codigo_aula, $a_academico);

header("Location: ../VISTA/carga_lectiva.php");
