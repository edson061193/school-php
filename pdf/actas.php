<?php

/**
 * Description of lista_alumnoPDFgs
 *
 * @author EDS7
 */
require_once '../MODELO/conexion.php';
require_once '../MODELO/trimestre_periodo.php';
require_once '../fpdf.php';
class actas  extends FPDF{
    //put your code here
}



session_start();

$grado = "";
$seccion = "";
$curso = "";

if (isset($_SESSION['codigo'])) {
    $grado = $_SESSION['listGrado'];
    $seccion = $_SESSION['listSecc'];
    $curso = $_SESSION['listCurso'];
}


$tr = new trimestre_periodo();
$val = $tr->listas_codigos($grado, $seccion, $curso);

$codig_curso = "";
$codigo_docente = "";
$codigo_aula = "";

$codigo_alumno;
$trimestre;

foreach ($val as $rs) {
    $codig_curso = $rs['codigo_curso'];
    $codigo_docente = $rs['codigo_curso'];
    $codigo_aula = $rs['codigo_aula'];
}



$pdf= new actas('P','mm','A4');
$pdf->SetMargins(20, 18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0x30,0x50,0x70);
$pdf->SetFont("Arial","",19);
$pdf->Cell(0,5,"ACTAS DE NOTAS ".$grado." ".$seccion." ",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"I.E. PEDRO RUIZ GALLO  (CURSO  :  ".$codig_curso."   )",0,1,'C');
$pdf->Cell(0,5,"----------------------------------------------------------------",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
 
$pdf->SetFont("Arial","b",9);

$pdf->SetTextColor(0x00,0x00,0x00);
//$rs=$matr->listar_matricula($txtgrado, $txtseccion);
$val_alum = $tr->alumnos_asig_notas($codig_curso, $grado, $seccion);
 $pdf->Cell(20,7, "CODIGO",2,0,'C');
 $pdf->Cell(40,7, "NOMBRES",2,0,'C');
 $pdf->Cell(40,7, "APELLIDOS",2,0,'C');
 $pdf->Cell(10,7, "NT",2,0,'C');
 $pdf->Cell(10,7, "P1",2,0,'C');
 $pdf->Cell(10,7, "P2",2,0,'C');
 $pdf->Cell(10,7, "P3",2,0,'C');
 $pdf->Cell(10,7, "PA",2,0,'C');
 $pdf->Cell(10,7, "PG",2,1,'C');
 $pdf->SetFont("Arial","",9);
 
foreach ($val_alum as $value) {

    $pdf->Cell(20,7,$value['codigo_alumno'],1,0,'C');
    $pdf->Cell(40,7,$value['nombre__alumno'],1,0,'C');
    $pdf->Cell(40,7,$value['apelli__alumno'],1,0,'C');
    $pdf->Cell(10,7,$value['nota_trabajos'],1,0,'C');
    $pdf->Cell(10,7,$value['promedio_01'],1,0,'C');
    $pdf->Cell(10,7,$value['promedio_02'],1,0,'C');
    $pdf->Cell(10,7,$value['promedio_03'],1,0,'C');
    $pdf->Cell(10,7,$value['nota_actitud'],1,0,'C');
    $pdf->Cell(10,7,$value['promedio_general'],1,1,'C');
 
}

$pdf->Output();