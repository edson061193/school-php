<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require_once '../MODELO/alumno.php';
require_once '../MODELO/conexion.php';
$alumno = new alumno();
$array = $alumno->listaalumno();
if (isset($_SESSION['codigo'])) {
    ?>
    <html>
        <meta charset="utf-8">
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/validaciones.js" type="text/javascript"></script>
        <link href="../css/formulario.css"  type="text/css" rel="stylesheet">

        <?php
        require_once '../VISTA/header_director.php';
        ?>
        <body>
            <!--<div class="contact_form" align="center" >-->
            <!--<div class="contact_form_2">-->
            <ul>
                <li>
                    <h2>Registrar Alumno</h2>
                </li>
            </ul>
            <form  method="POST" action="../CONTROLADOR/registrar_alumno.php" enctype="multipart/form-data" >
                <div style="width: 100%">
                    <div class="subdiv">
                        <div >Ingrese DNI: </div>
                        <div> <input type="text" class="form-control" name="txt_dni" placeholder="ingrese DNI del alumno" maxlength="8" onkeypress="ValidaSoloNumeros()">
                        </div>
                    </div>
                    <div class="subdiv">
                        <div>Ingrese Apellidos: </div>
                        <div><input type="text"  class="form-control" name="txt_apellidos" placeholder="ingrese apellidos del alumno" onkeypress="txNombres()">
                        </div>
                    </div>
                    <div class="subdiv">
                        <div>Ingrese Nombres: </div>
                        <div> <input type="text"  class="form-control" name="txt_nombres" placeholder="ingrese Nombres del alumno"onkeypress="txNombres()">

                        </div>
                    </div>

                    <div class="subdiv">
                        <div>Seleccionar foto: </div>
                        <div><input class="btn btn-default"  type="file" name="foto" > </div>
                    </div>

                    <div class="subdiv">
                        <div>Facha Nacimiento: </div>
                        <div><input class="form-control" type="date" name="date_fnacimiento" > </div>
                    </div>
                    <div class="subdiv">
                        <div>Facha ingreso: </div>
                        <div><input type="date" class="form-control" name="date_fingreso" ></div>
                    </div>
                    <div class="subdiv">
                        <div>sexo: </div>
                        <div> <input type="radio" name="rbSexo" value="M" checked="checked" />Masculino
                            <input type="radio" name="rbSexo" value="F" checked="checked" />Femenino</div>
                    </div>
                    <div class="subdiv">
                        <div>Apoderado: </div>
                        <div>  <input type="text"  class="form-control" name="txt_apoderado"  maxlength="8" placeholder="ingrese codigo apoderado ">
                        </div>
                    </div>
                    <div style="width: 100%;text-align: center">
                        <button class="submit" type="submit">GRABAR</button>
                    </div>
                </div>
                <style>
                    .subdiv{
                        width: 45%;
                        display: inline-block;
                        vertical-align: top;
                        padding: 1% 5%;
                    }
                </style>
            </form>

            <table class="table ">
                <br>
                <tr style="background-color: #22b573">
                    <td class="DNI">DNI</td>
                    <td>Apellidos </td>
                    <td>Nombre </td>
                    <td>Foto </td>
                    <td>Fecha Nacimiento </td>
                    <td  >Fecha Ingreso </td>
                    <td>Sexo </td>
                    <td>IDE Apoderado </td>
                    <td> </td>
                </tr>

                <?php
                foreach ($array as $r) {



                    echo '
                       <tr>
                        <td class="DNI">' . $r['dni__alumno'] . '</td>
                        <td>' . $r['apelli__alumno'] . '</td>
                        <td>' . $r['nombre__alumno'] . '</td>
                        <td></td>
                        <td>' . $r['fechaN__alumno'] . '</td>
                        <td>' . $r['fechaI__alumno'] . '</td>
                        <td>' . $r['sexo__alumno'] . ' </td>
                        <td>  ' . $r['codigo_apoderado'] . '            </td>
                        <td  align="center">
                        </td>
                    </tr>
                    ';
                }
                ?>
            </table>

            <!--</form>-->

        </body>
        <style> 
        </style>
    </html>
    <?php
} else {
    header("Location: ../cerrar_session.php");
}
?>
