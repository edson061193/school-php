<?php
session_start();
require_once '../MODELO/alumno.php';
require_once '../MODELO/conexion.php';
if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
      
} else {

    header("Location: ../cerrar_session.php");
}
$alumno = new alumno();
$log = $alumno->datos_alumnos($codigo);
while ($row = mysqli_fetch_array($log)) {
    $foto = '../CONTROLADOR/' . $row['foto__alumno'];
     $_SESSION['xnombre'] = $row['apelli__alumno'].',  '.$row['nombre__alumno'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/general_style.css" type="text/css"  rel="stylesheet">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<!--        <script src="../bootstrap/js/bootstrap.js" type="text/javascript" ></script>   
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>   -->
    </head>

    
    <div style="width: 100%;height: auto;">
        <div style="width: 79%"  class="alinear">
            <img style="width: 35%;height: auto"src="../img/logo.png">

        </div>
        <div style="width: 20%;float:right" class="alinear">
            <table style="width: 100%">
                <tr>

                    <td>
                        <input  type="search" name="txtBuscarA" placeholder="Buscar..." class="form-control alinear" style="float: right">
                    </td>
                    <td><button class="btn colorPag alinear" style="float: right"><img style="width: 100%;height: auto"src="../img/search-32.png"></button>
                    </td>
                </tr>
            </table>   
        </div>

    </div>




    <nav>
        <ul>
            <li class="colorPag"><a  href="../cerrar_session.php" ><img style="width: 50%;height: auto"src="../img/CERRAR S.png"></a></li>

            <li><a  href="../VISTA/perfil_alumno.php">Home </a></li>
            <li><a  href="#">Tareas</a></li>
            <li><a  href="../VISTA/matricula_virtual_alumno.php">Matricula virtual</a></li>
            <li><a  href="../VISTA/record_academico_alumno.php">Record Acad</a></li>
            <li><a  href="#">Descargar Silabu</a></li>
            <li><a href="../#" >Faltas <span class="badge pull-right"> (42)</span>
                </a></li>

            <!--<li style="float:right;padding: 0px ;margin: 0px; "><a  href="../VISTA/perfil_alumno.php" style="padding: 0px ;margin: 0px;">-->
                    <?php 
//                    echo '  <img class="img_p" src="' . $foto . '">'; 
                    ?>
                <!--</a></li>-->

        </ul>
    </nav>
    <br>
    <br>

</html>

<!--onclick="<?php
//session_destroy();
?>"-->