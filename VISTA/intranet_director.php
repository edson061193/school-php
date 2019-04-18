<?php
session_start();
if(isset($_SESSION['codigo'])){
   require_once 'header_director.php'; 
}else{
    header("Location: ../cerrar_session.php");
}



