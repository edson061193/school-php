<!doctype html>
<html>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="../js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            function  abrirFormulario() {
                $(".contenedor_docente").slideDown("slow");
            }
            function  closeFormulario() {
                $(".contenedor_docente").slideUp("slown");
            }
        </script>
<?php 
require_once("./header_docente.html");
session_start();
require_once '../MODELO/conexion.php';
require_once '../MODELO/docente.php';
$doce = new docente();
$codigo = "";
if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
}
$v = $doce->datos_docente($codigo);

?>

<body>


<div class="alinear_cuerpo_docente">
<div >
<table >
   <!--usuari__docente, clave__docente, fechai__docente, foto__docente, TIPO__DOCENTE, HORAS_MAX-->
        <?php
        foreach ($v as $value) {
            echo '<tr><td  align="center"><img class="fondo_docente" src=../CONTROLADOR/' . $value['foto__docente'].'></td><td></td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold;" >CODIGO :</td><td>' . $value['codigo_docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">DNI :</td><td>' . $value['dni__docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">APELLIDOS :</td><td>' . $value['apelli_docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">NOMBRES :</td><td>' . $value['nombre__docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">DIRECCION :</td><td>' . $value['direcc__docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">CELULAR :</td><td>' . $value['celula__docente'].'</td></tr>';
        echo '<tr><td style="color:#B01215;font-weight:bold">SEXO :</td><td>' . $value['sexo__docente'].'</td></tr>';
        
    }
    ?>
    
    </table>
    
</div>
</div>
<div style="float:right;padding:1%;width:150%;display:block;vertical-align:top"><a href="javascript:abrirFormulario();">    
<button class="btn btn-warning" style="float:right">Cambiar Contraseña</button></a></div>

<div class="contenedor_docente">
        <div class="formulario_docente ">
            <div class="cerrar"><a href="javascript: closeFormulario();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Cambiar Contraseña</h4> 
            <form action="#" method="POST" >
                <table class="table">
                    <tr><td>Contraseña Anterior :</td><td> <input type="password" class="form-control btn-default"  name="txtClave1" required="">  
                        </td></tr>
                    <tr><td>Nueva Contraseña  :</td><td> <input type="password" class="form-control btn-default"  name="txtClave2"> 
                        </td></tr>
                    <tr><td>Confirma Contraseña  :</td><td> <input type="password" class="form-control btn-default"  name="txtClave3">  
                        </td></tr>
                    <tr><td colspan="2" align="center"><button class="btn" style="background-color: #d01c32;width: 70%;">Aceptar</button></td></tr>
                </table>
            </form>
        </div>
    </div>


</body>
</html>