<?php

require_once '../MODELO/conexion.php';
//require_once '../contr_PHP/alumno.php';
require_once '../MODELO/matricula.php';
require_once '../MODELO/trimestre_periodo.php';

$matricula = new matricula();
$periodo = new trimestre_periodo();

$rs=$periodo->result_trimestre();
$trimestre;
//$codigoA=$_POST['txt_codigo'];

$grado=$_POST['cbo_grado'];
$seccion=$_POST['cbo_seccion'];

$codigo_aula="";
//$validar=$_POST['validar'];
$codigo;
session_start();
if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];

}
else {
    
    header("Location: ../cerrar_session.php");
}
$sql=$matricula->select_grado_Seccion($grado, $seccion);
//aqui selecciona el ultimo trimestre registrado
foreach ($rs as $v) {
    $trimestre=$v['codigo_bimestre'];
}
//aqui selecciona  los codigos de los cursos
$array=$periodo->listar_curso($grado, $seccion);
foreach ($array as $value) {
        $periodo->registrar_alumnos_t($trimestre, $value['CODIGO_CURSO'], $codigo);  
    }

while ($row1 = mysqli_fetch_array($sql)) {
       $codigo_aula=$row1['codigo_aula'];
      
}
if($codigo_aula===""){
    echo 'Error';
}

else{
   
      $matricula->registro_matricula_sc($codigo_aula, $codigo);
      $con=new conexion();
      $conexion=$con->abrirConextion();
      mysqli_query($conexion, "CALL sp_registrar_matricula('".$codigo."')");
      header("Location: ../VISTA/matricula_virtual_alumno.php");


}

   


