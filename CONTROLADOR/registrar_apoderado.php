<?php

require_once '../MODELO/conexion.php';
require_once '../MODELO/apoderado.php';

$dni=$_POST['txtDNI'];
$apellidos=$_POST['txtApellido'];
$nombres=$_POST['txtNombres'];
$direccion=$_POST['txtDireccion'];
$telefono=$_POST['txtTlf'];
$sexo=$_POST['grpSEXO'];
$email=$_POST['txtEmail'];

$urlcopiaDNI="archivos";
$archivocopiaDNI=$_FILES['copiaDNI']['tmp_name'];
$nomArchcopiaDNI=$_FILES['copiaDNI']['name'];
move_uploaded_file($archivocopiaDNI, $urlcopiaDNI."/".$nomArchcopiaDNI);
$urlcopiaDNI=$urlcopiaDNI."/".$nomArchcopiaDNI;

$urlcopiaRecibo="archivos";
$archivocopiaRecibo=$_FILES['copiaRecibo']['tmp_name'];
$nomArchcopiaRecibo=$_FILES['copiaRecibo']['name'];
move_uploaded_file($archivocopiaRecibo, $urlcopiaRecibo."/".$nomArchcopiaRecibo);
$urlcopiaRecibo=$urlcopiaRecibo."/".$nomArchcopiaRecibo;

$urlcopiaPago="archivos";
$archivocopiaPago=$_FILES['copiaPago']['tmp_name'];
$nomArchcopiaPago=$_FILES['copiaPago']['name'];
move_uploaded_file($archivocopiaPago, $urlcopiaPago."/".$nomArchcopiaPago);
$urlcopiaPago=$urlcopiaPago."/".$nomArchcopiaPago;

$apoderado= new apoderado();

$apoderado->registrar_apoderado($dni, $apellidos, $nombres, $direccion, $telefono, $sexo, $urlcopiaDNI, $urlcopiaRecibo, $urlcopiaPago, $email);
header("Location: ../VISTA/formulario_alumno.php");

?>
