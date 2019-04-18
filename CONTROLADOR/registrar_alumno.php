<?php
//header("Location: ../templ_PHP/formulario_alumno");
require_once '../MODELO/conexion.php';
require_once '../MODELO/alumno.php';
//$codigo=$_POST['txt_codigo'];
$dni=$_POST['txt_dni'];
$apellidos=$_POST['txt_apellidos'];
$nombres=$_POST['txt_nombres'];
$codigo='A'.$dni.'0';

$url="fotos";
$archivo=$_FILES['foto']['tmp_name'];
$nomArch=$_FILES['foto']['name'];
move_uploaded_file($archivo, $url."/".$nomArch);
$url=$url."/".$nomArch;

$fnac= $_POST['date_fnacimiento'];
$fing=$_POST['date_fingreso'];
$sexo=$_POST['rbSexo'];
//$estado=$_POST['txt_estado'];
//$usuario=$_POST['txt_usuario'];
//$clave=$_POST['txt_clave'];
$apoderado=$_POST['txt_apoderado'];
//echo $url;
//$foto=$_POST['txt_img'];
$alum= new alumno();
$alum->insertar_alumno($codigo, $dni, $apellidos, $nombres, $url, $fnac, $fing, $sexo, '1',$codigo,$apoderado);
header("Location: ../VISTA/formulario_alumno.php");
?>
