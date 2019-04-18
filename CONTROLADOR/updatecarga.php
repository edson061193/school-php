<?php 
require_once '../MODELO/docente.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/trimestre_periodo.php';
require_once '../MODELO/curso.php';
require_once '../MODELO/matricula.php';
session_start();
$trimestre= new trimestre_periodo();
$docente = new docente();
$matricula = new matricula();


$codigoDocente= $_POST['txtCodigo'];
$fecha= date("Y").'PRG';
$grado=$_POST['txtgrado'];
$seccion=$_POST['txtseccion'];
$nomb_doce=$_POST['txtbdoce'];
$codCurso=$_POST['txtcocur'];

$ncod_do="";
$ncodigoAula="";


$valCodigoCurso= $trimestre->listas_codigos_($grado, $seccion, $nomb_doce);
$valCodigoAula=$matricula->select_grado_Seccion($grado, $seccion);
foreach ($valCodigoCurso as $nc) {
    $ncod_do=$nc['codigo_docente'];
    
}
foreach ($valCodigoAula as $na) {
    $ncodigoAula=$na['codigo_aula'];
  
}
//echo $codigoDocente.' '.$ncod_curso.' '.$ncodigoAula;

$trimestre->update_carga_($ncodigoAula, $ncod_do, $codigoDocente, $fecha,$codCurso);
header("Location: ../VISTA/carga_lectiva.php?x=0");