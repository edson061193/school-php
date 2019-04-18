<?php

session_start();

$_SESSION['codigo_docente'] = "";
$_SESSION['dni__docente'] = "";
$_SESSION['codigo']="";
$_SESSION['dni']="";

$usuario = $_POST['txt_usuario'];
$clave = $_POST['txt_clave'];

$xval = substr($usuario, 0, 1);
require_once '../MODELO/conexion.php';
require_once '../MODELO/login.php';

$log = new login();
$resultadoRS = "";
$tipoDocente = "";
$codigo;
$dni="";
if ($xval == "A") {
    $val = $log->login_alumno($usuario, $clave);

    while ($row = mysqli_fetch_array($val)) {
        $codigo = $row['codigo_alumno'];
        $dni = $row['dni__alumno'];

    }
    if ($dni === "") {
        
    } else {
        $_SESSION['codigo'] = $codigo;
        $_SESSION['dni'] = $dni;
       echo $_SESSION['codigo'];
        header("Location: ../VISTA/perfil_alumno.php");
    }
}
//
//if ($usuario == " ' or 1='1 " 
//        || $clave == "' or 1='1" 
//        || $clave="1'='true" 
//        || $usuario="1'='true"
//        || $clave="0'='0" 
//        || $usuario="0'='0"
//        || $clave="'='" 
//        || $usuario="'='"
//        || $clave="1'='0" 
//        || $usuario="1'='0"
//        || $clave="'='0" 
//        || $usuario="'='0"
//        || $clave="1'='" 
//        || $usuario="1'='"
//        
//        ){
//    header("Location: ../index.php?x=error");
//}else{
$val = $log->validar_acceso_docente($usuario, $clave);
while ($row = mysqli_fetch_array($val)) {
    $codigo = $row['codigo_docente'];
    $dni = $row['dni__docente'];
    $tipoDocente = $row['TIPO__DOCENTE'];
}
if ($tipoDocente != null) {
    session_start();
//
//    $_SESSION['codigo_docente'] = "";
//    $_SESSION['dni__docente'] = "";
    if ($tipoDocente === 'DIRECTOR') {
        $_SESSION['codigo'] = $codigo;
        $_SESSION['dni'] = $dni;
        $_SESSION['val'] = $opc1;
        header("Location: ../VISTA/intranet_director.php");
    }
    if ($tipoDocente === 'PROFESOR') {
        $_SESSION['codigo'] = $codigo;
        $_SESSION['dni'] = $dni;
        header("Location: ../VISTA/intranet_docente.php");
    }
    
}


//}





