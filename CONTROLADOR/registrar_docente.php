<?php
//header("Location: ../templ_PHP/formulario_alumno");
require_once '../MODELO/conexion.php';
require_once '../MODELO/docente.php';

$dni=$_POST['txt_dni'];
$codigo='0'.$dni.'0';
$apellidos=$_POST['txt_apellidos'];
$nombres=$_POST['txt_nombres'];

$url="fotos";
$archivo=$_FILES['foto']['tmp_name'];
$nomArch=$_FILES['foto']['name'];
move_uploaded_file($archivo, $url."/".$nomArch);
$url=$url."/".$nomArch;

$direccion=$_POST['txt_direccion'];
$celular=$_POST['txt_celular'];
$email=$_POST['txt_mail'];
$sexo=$_POST['rbSexo'];
$fechaI= $_POST['date_fingreso'];
$tipo=$_POST['cboTipo'];
$hra=$_POST['txtHras'];

$docen= new docente();
$docen->insertar_docente($codigo, $dni, $apellidos, $nombres, $direccion, $celular, $email, $sexo,$fechaI,$url,$tipo,$hra);
header("Location: ../VISTA/formulario_docente.php");
?>
