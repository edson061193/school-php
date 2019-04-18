<?php

session_start();

if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];   
    $_SESSION['listGrado'] = $_POST['listGrado'];
    $_SESSION['listSecc'] = $_POST['listSecc'];

   if(isset($_POST['listCurso'])){
   	  $_SESSION['listCurso'] = $_POST['listCurso'];
   	}   	      
}

if(isset($_GET['x'])){

	header("Location: ../VISTA/horario.php");
}
if(isset($_GET['p'])){
	header("Location: ../VISTA/asignar.php");
}

 ?>