<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of lista_alumno
 *
 * @author EDS7
 */
require_once '../fpdf.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/alumno.php';

class lista_alumnoPDF  extends FPDF{
    //put your code here
}
$pdf= new lista_alumnoPDF('P','mm','A4');
$pdf->SetMargins(20, 18);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0x30,0x50,0x70);
$pdf->SetFont("Arial","",19);
$pdf->Cell(0,5,"LISTA DE ALUMNOS MATRICULADOS",0,1,'C');
$pdf->Cell(0,5,"----------------------------------------------------------------",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');
$pdf->Cell(0,5,"",0,1,'C');

$alum= new alumno();
$pdf->SetFont("Arial","b",9);

$pdf->SetTextColor(0x00,0x00,0x00);
$rs=$alum->lista_alumno();
 $pdf->Cell(30,5, "CODIGO",1,0,'C');
 $pdf->Cell(30,5, "DNI",1,0,'C');
 $pdf->Cell(30,5, "APELLIDOS",1,0,'C');
 $pdf->Cell(30,5, "NOMBRES",1,0,'C');
 $pdf->Cell(30,5, "FECHA NACIM.",1,0,'C');
 $pdf->Cell(30,5, "SEXO",1,1,'C');
 $pdf->SetFont("Arial","",9);
 
foreach ($rs as $value) {

    $pdf->Cell(30,5,$value['codigo_alumno'],0,0,'C');
    $pdf->Cell(30,5,$value['dni__alumno'],0,0,'C');
    $pdf->Cell(30,5,$value['apelli__alumno'],0,0,'L');
    $pdf->Cell(30,5,$value['nombre__alumno'],0,0,'L');
    $pdf->Cell(30,5,$value['fechaN__alumno'],0,0,'C');
    $pdf->Cell(30,5,$value['sexo__alumno'],0,1,'C');
 
}
$pdf->Output();