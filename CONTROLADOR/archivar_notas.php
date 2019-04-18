<?php
require_once '../MODELO/trimestre_periodo.php';
require_once '../MODELO/conexion.php';
$t= new trimestre_periodo();
$res=$t->result_trimestre();

$nt=$_POST['txtNT'];
$p1=$_POST['txtP1'];
$p2=$_POST['txtP2'];
$p3=$_POST['txtP3'];
$pa=$_POST['txtPA'];
$cb="";
foreach ($res as $value) {
           $cb=$value['codigo_bimestre']; 
        }
//        echo $codigo_trismestre;
$cc=$_POST['txtcod_curso'];
$ca=$_POST['tc'];

$pg=($nt+$p1+$p2+$p3+$pa)/5.0;
//echo $promedio;

$t->registrar_notas($nt, $p1, $p2, $p3, $pa, $pg, $cb, $cc, $ca);
header("Location: ../VISTA/asignar.php");