<?php
require_once '../VISTA/header_director.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/curso.php';
require_once '../MODELO/docente.php';
require_once '../MODELO/trimestre_periodo.php';

$trimestre = new trimestre_periodo();
$curso = new curso();
$docente = new docente();
$grado = "";
$seccion = "";
session_start();
if (isset($_SESSION['g'])) {
    $grado = $_SESSION['g'];
    $seccion = $_SESSION['s'];
}

$v = substr($_GET['p'], 0, 1);
$codigo = substr($_GET['p'], 1, 7);
$codigod = substr($_GET['p'], 7, 17);

$fecha = date("Y") . 'PRG';
//$rs = $trimestre->update_carga($codigod, $fecha);
$rs = $trimestre->update_carga_p($codigod, $fecha, $grado, $seccion);
if ($v == 'u') {
    ?>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jqueryui.js"></script>
    <script type="text/javascript">
        var x;
        x = $(document);
        x.ready(inicio);

        function inicio() {
            var posibilidades = [
    <?php
    $result = $docente->lista_docente();
    while ($fila = mysqli_fetch_array($result)) {

        echo '  "' . $fila['n'] . ' ",';
    }
    ?>
            ];
            x = $("#bus_curso");
            x.autocomplete({source: posibilidades});
        }


    </script>
    <br>
       <ul>
                <li>
                    <h2>Validar carga Lectiva</h2>
                </li>
            </ul>
    <br>
       <table class="table">
            <thead>
                <tr>
                    <th class="cd z" >Codigo</th>
                    <th class="gs z" >GRADO</th>
                    <th class="gs z" >SECCIÓN</th>
                    <th class="gs z" >AÑO</th>
                    <th class="tdv z" >APELLIDOS NOMBRES</th>
                    <th class="tdv z" ></th>
                    <th class="tdv z">Curso Actual</th>
                    <th class="tdv z" >Nuevo Docente </th>
                    <th style="background-color: #3399ff">MODIFICAR</th></tr>

            </thead>
        </table>
    <form action="../CONTROLADOR/updatecarga.php" method="POST"

          <?php
          if (!isset($_GET['x']) == 0) {
              echo '<div style="width: 50%;background-color: #99ff99;border-radius: 10px 10px 10px 10px ;height: 40px">';
              echo '<p><b><u>Registro Modificado Exitosamente !!!</u></b></p></div>';
          }
         
        while ($r = mysqli_fetch_array($rs)) {
            echo '<form action="../CONTROLADOR/updatecarga.php" method="POST">
        <table class="table">
         
            <tbody>
                <tr>
                    <th class="cd"><input class="form-control" type="text" name="txtcocur" value="' . $r['codigo_curso'] . '"></th>
                    <th class="gs"><input class="form-control" type="text" name="txtgrado" value="' . $r['grado___aula'] . '"></th>
                    <th class="gs"><input class="form-control" type="text" name="txtseccion" value="' . $r['seccio__aula'] . '"></th>
                    <th class="gs">' . $r['fecha__cargalect'] . '</th>
                    <th class="tdv">' . $r['apelli_docente'] . '</th>
                    <th class="tdv"><input type="hidden" name="txtCodigo" value="' . $r['codigo_docente'] . '"></th>
                    <th class="tdv">' . $r['nombre__curso'] . '</th>
                    <th class="tdv"><input  required="" class="form-control"type="text" id="bus_curso" name="txtbdoce"></th>
                    <th ><button class="btn btn-success" style="width: 100%"><img style="width: 10%"src="../img/acept.png"></button></th></tr>
            </tbody>

        </table>
    </form>';
        }
        ?>


        <style> 
            .gs{
                width: 5%;
            }
            .cd{
                width: 15%;
            }.tdv{
                width: 15%;
            }
            

        </style>















        <?php
        if ($v == 'd') {
            $trimestre->eliminar_carga($codigo, $fecha);
            header("Location: ../VISTA/carga_lectiva.php");
        }
    }    