<?php
$url="fotos";
$archivo=$_FILES['foto']['tmp_name'];
$nomArch=$_FILES['foto']['name'];
move_uploaded_file($archivo, $url."/".$nomArch);
$url=$url."/".$nomArch;
require_once '../MODELO/conexion.php';
require_once '../MODELO/alumno.php';
$alum = new alumno();
$cod= $_GET['x'];
if($cod=="u'".$cod."'"){
    $alum->cambiar_img($img, $codigo);
}
if($cod==="e'".$cod."'"){
    $alum->eliminar_img($codigo);
}
header("Location: ../VISTA/perfil_alumno.php");
?>