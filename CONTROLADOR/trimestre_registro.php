<?php
require_once '../MODELO/trimestre_periodo.php';
require_once '../MODELO/conexion.php';
$reg= new trimestre_periodo();

$txt_codigo_trimestre = $_POST['txt_codigo_trimestre'];
$txt_inicio_trimestre= $_POST['txt_inicio_trimestre'];
$txt_fin_trimestre=$_POST['txt_fin_trimestre'];
 $perido_c = date("Y") . 'PRG';
 echo $txt_codigo_trimestre.$txt_fin_trimestre.$perido_c;
$reg->registrar_trimestre($txt_codigo_trimestre, $txt_inicio_trimestre, $txt_fin_trimestre,$perido_c);
header("Location: ../VISTA/registro_trimestre.php");