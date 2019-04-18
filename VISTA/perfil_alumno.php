<!DOCTYPE html>
<?php
$codigo = "";
$dni = "";
$apellidos = "";
$nombres = "";
$foto = "";
$fechaNacimiento = "";
$fechaIngreso = "";
$sexo = "";
$estado = "";
$usuario = "";
$clave = "";
$apoderado = "";

require_once '../MODELO/alumno.php';
require_once '../MODELO/conexion.php';
?>
<!--<div class="contenedor_principal">-->   

<?php require_once 'header_alumno.php'; ?>
<!--</div>-->

<?php
$alumno = new alumno();

if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
} else {

    header("Location: ../cerrar_session.php");
}


$log = $alumno->datos_alumnos($codigo);
while ($row = mysqli_fetch_array($log)) {
    $dni = $row['dni__alumno'];
    $apellidos = $row['apelli__alumno'];
    $nombres = $row['nombre__alumno'];
    $clave = $row['claveu_alumno'];
    $fechaNacimiento = $row['fechaN__alumno'];
    $fechaIngreso = $row['fechaI__alumno'];
    $sexo = $row['sexo__alumno'];
    if ($sexo === "M") {
        $sexo = "Masculino";
    } else {
        $sexo = "Femenino";
    }
    $estado = $row['estado__alumno'];
    $usuario = $row['iduser__alumno'];
    $clave = $row['claveu_alumno'];
//    $apoderado = $row['nombre__apoderado'].' '.$row['apelli__apoderado'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../css/nav.css" type="text/css" rel="stylesheet">
        <link href='../../disen_PHP/css/general_style.css' type="text/css" rel="stylesheet">
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            function  openVentana() {
                $(".ventana").slideDown("slow");
            }
            function  closeVentana() {
                $(".ventana").slideUp("slown");
            }
        </script>
    </head>

    <body>
        <br>


        <h4 class="textAlumno" style="border-bottom:3px solid #97d9db ">Datos Alumno</h4>
    <center>    
        <div style="width: 80%; height: 100%;">
            <div class="alinear" style="float: left;width: 49%;">
                <div class="h6xp" align="left"><?php echo '  <img  class="img_p" src="' . $foto . '">'; ?></div>

            </div>
            <div class="alinear" style="float: left;width: 39%;">
                <h6 class="h6xp" align="left"><b>D.N.I        :</b> <?php echo $dni ?></h6>
                <h6 class="h6xp" align="left"><b>Fecha Nacimiento :</b> <?php echo $fechaNacimiento ?></h6>
                <h6 class="h6xp" align="left"><b>Sexo             :</b> <?php echo $sexo ?></h6>
                <h6 class="h6xp" align="left"><b>Apellidos :</b> <?php echo $apellidos ?></h6>
                <h6 class="h6xp" align="left"><b>Nombres   :</b> <?php echo $nombres ?></h6>

            </div>
            <div class="alinear" style="float: left;width: 10%;">

                <a href="javascript: openVentana();"> <button  class="btn btnNaranja">cambiar contraseña</button></a>

            </div>

        </div>
    </center>
    <br>








    <div class="ventana fondoFormulario">

        <div class="formulario ">

            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Cambiar Contraseña</h4> 
            <form action="#" method="POST" >

                <table class="table">
                    <tr><td>Contraseña Anterior :</td><td> <input type="password" class="form-control btn-default"  name="txtClave1" required="">  </div>
                        </td></tr>

                    <tr><td>Nueva Contraseña  :</td><td> <input type="password" class="form-control btn-default"  name="txtClave2">  </div>
                        </td></tr>

                    <tr><td>Confirma Contraseña  :</td><td> <input type="password" class="form-control btn-default"  name="txtClave3">  </div>
                        </td></tr>
                    <tr><td colspan="2" align="center"><button class="btn" style="background-color: #d01c32;width: 70%;">Aceptar</button></td></tr>

                </table> 

            </form>
        </div>
    </div>



</body>

</html>
<?php
if (isset($_POST['txtClave1']) && isset($_POST['txtClave2']) && isset($_POST['txtClave3'])) {
    if (md5($_POST['txtClave1']) === $clave) {
        if ($_POST['txtClave2'] === $_POST['txtClave3']) {
            $md5x = md5($_POST['txtClave2']);
            $alumno->cambiar_clave($codigo, $md5x);
            ?>
            <script type="text/javascript">
                alert("Contraseña Modificada")</script>
                <?php
        }
    }
}
?>