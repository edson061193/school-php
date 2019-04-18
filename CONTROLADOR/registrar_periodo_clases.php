<?php
require_once '../MODELO/trimestre_periodo.php';
require_once '../MODELO/conexion.php';

$perirod = new trimestre_periodo();

$txt_codigo_periodo= $_POST['txt_codigo_periodo'];
$txt_nombre_periodo=$_POST['txt_nombre_periodo'];
$txt_inicio_periodo=$_POST['txt_inicio_periodo'];
$txt_fin_periodo=$_POST['txt_fin_periodo'];

$perirod->registrar_perido_clases($txt_codigo_periodo, $txt_nombre_periodo, $txt_inicio_periodo, $txt_fin_periodo);
header("Location: ../VISTA/registro_trimestre.php");
