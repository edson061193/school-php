<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lista_alumnoPDFgs
 *
 * @author EDS7
 */
require_once '../fpdf.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/matricula.php';
class lista_alumnoPDFgs  extends FPDF{
    //put your code here
}
$txtgrado=$_POST['txtgrado'];
$txtseccion=$_POST['txtseccion'];

$pdf= new lista_alumnoPDFgs('P','mm','A4');
$pdf->SetMargins(20, 18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0x30,0x50,0x70);
$pdf->SetFont("Arial","",19);
$pdf->Cell(0,5,"LISTA DE ALUMNOS MATRICULADOS ".$txtgrado." ".$txtseccion." ",0,1,'C');
$pdf->Cell(0,5,"----------------------------------------------------------------",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');

$matr=new matricula();
$pdf->SetFont("Arial","b",9);

$pdf->SetTextColor(0x00,0x00,0x00);
$rs=$matr->listar_matricula($txtgrado, $txtseccion);
 $pdf->Cell(20,10, "CODIGO",1,0,'C');
 $pdf->Cell(20,10, "DNI",1,0,'C');
 $pdf->Cell(30,10, "APELLIDOS",1,0,'C');
 $pdf->Cell(30,10, "NOMBRES",1,0,'C');
 $pdf->Cell(20,10, "GRADO",1,0,'C');
 $pdf->Cell(20,10, "SECCION",1,0,'C');
 $pdf->Cell(30,10, "FECHA NACIM.",1,0,'C');
 $pdf->Cell(15,10, "SEXO",1,1,'C');
 $pdf->SetFont("Arial","",9);
 
foreach ($rs as $value) {

    $pdf->Cell(20,7,$value['codigo'],0,0,'C');
    $pdf->Cell(20,7,$value['dni'],0,0,'C');
    $pdf->Cell(30,7,$value['apellidos'],0,0,'L');
    $pdf->Cell(30,7,$value['nombres'],0,0,'L');
    $pdf->Cell(20,7,$value['grado'],0,0,'C');
    $pdf->Cell(20,7,$value['seccion'],0,0,'C');
    $pdf->Cell(30,7,$value['fecha'],0,0,'C');
    $pdf->Cell(15,7,$value['sexo__alumno'],0,1,'C');
 
}
$pdf->Output();