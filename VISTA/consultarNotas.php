<script src="../js/jquery.js"></script>
<script src="../js/vn.js"></script>
<?php
session_start();

$grado = "";
$seccion = "";
$curso = "";

if (isset($_SESSION['codigo'])) {
    $grado = $_SESSION['listGrado'];
    $seccion = $_SESSION['listSecc'];
    $curso = $_SESSION['listCurso'];
}
//if (isset($_POST['listGrado']) && isset($_POST['listGrado']) && isset($_POST['listGrado'])) {
//   
//}
// else {
//}
// require_once './header_docente.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/trimestre_periodo.php';


$tr = new trimestre_periodo();
$val = $tr->listas_codigos($grado, $seccion, $curso);

$codig_curso = "";
$codigo_docente = "";
$codigo_aula = "";

$codigo_alumno;
$trimestre;

foreach ($val as $rs) {
    $codig_curso = $rs['codigo_curso'];
    $codigo_docente = $rs['codigo_curso'];
    $codigo_aula = $rs['codigo_aula'];
}

$val_alum = $tr->alumnos_asig_notas($codig_curso, $grado, $seccion);
?>

<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" href="../css/general_style.css"/>

<div style="width: 100%;">
    <a href="javascript:history.go(-1);">Atras << </a>
    <table>
        <thead style="background-color: #ffcc66">
            <tr>
                <td>Codigo  :</td>
                <td><b><?php echo $codigo_docente ?></b></td>
            </tr>
            <tr>
                <td>Grado/Seccion:</td>
                <td><b><?php echo $grado . '/' . $seccion ?></b></td>
            </tr>

            <tr>

                <td>Curso:</td>
                <td><b><?php echo $curso ?></b></td>
            </tr>
        </thead>
    </table>
    <br>
<div class="table-responsive">
    <table class="table">
        <thead style="background-color: #22b573;text-align: center">
            <tr>

                <td class="px">COD</td>
                <td class="px">NOMBRES</td>
                <td class="px">APELLIDOS</td>
                <td class="px">NT</td>
                <td class="px">P1</td>
                <td class="px">P2</td>
                <td class="px">P3</td>
                <td class="px">PA</td>
                <td class="px">PROMEDIO</td>
                <td class="px"></td>
            </tr>

        </thead>
        <input type="hidden" maxlength="2" >
    </table></div>

    <?php
    foreach ($val_alum as $value) {
        if($value['promedio_general'] <11){
            ?>
    <style>
        .col{
            color: red;
            font-size: 18px;
            font-family: fantasy;
        }
    </style>
    <?php
        }if($value['promedio_general'] >10){
                 ?>
    <style>
        .col{
            color: blue;
            font-size: 18px;
            font-family: fantasy;
        }
    </style>
    <?php
        }
        echo '<form id="f" action="../CONTROLADOR/archivar_notas.php" method="POST"><table class=""><tr>';
        echo '<td ><input  class="form-control" type="text" name="tc" value="' . $value['codigo_alumno'] . '" ></td>';
        echo '
               
              <td ><input  class="form-control" type="text" name="txt_nombre" value="' . $value['nombre__alumno'] . '" disabled></td>
                <td ><input  class="form-control " type="text" name="txt_apellido" value="' . $value['apelli__alumno'] . '" disabled></td>
                <td ><input  class="form-control " type="text" onkeypress="return compruebacampo()" name="txtNT" value="' . $value['nota_trabajos'] . '" maxlength="2" required=""></td>
                <td ><input  class="form-control" type="text" onkeypress="return compruebacampo()" name="txtP1"  value="' . $value['promedio_01'] . '" maxlength="2" required=""></td>
                <td ><input  class="form-control" type="text" onkeypress="return compruebacampo()" name="txtP2" value="' . $value['promedio_02'] . '" maxlength="2" required=""></td>
                <td ><input  class="form-control" type="text" onkeypress="return compruebacampo()" name="txtP3" value="' . $value['promedio_03'] . '" maxlength="2" required=""></td>
                <td ><input  class="form-control" type="text" onkeypress="return compruebacampo()" name="txtPA" value="' . $value['nota_actitud'] . '"maxlength="2"required=""></td>
                <td ><input  class="form-control col" type="text" onkeypress="return compruebacampo()" name="txtPromedio" value="' . $value['promedio_general'] . '" disabled></td>
         <td ><input  class="form-control" type="hidden" name="txtcod_curso" value="' . $codig_curso . '"></td>        
<td ><button class="btn btn-primary">Aceptar</button></td>';
        echo '    </tr>';
        echo '    </table>  </form>';
    }
    ?>

    <a href="../pdf/actas.php"><button class="btn btn-primary" width="300px">IMPRIMIR ACTAS</button></a>
</div>
<style>
    #f{
        padding: 0px;
        margin: 0px;
    }
    tr td{
        /*width: 100px;*/
        border: 1px solid;
    }
    .px{
        width: 160px;
    }
</style>