<meta charset="utf-8">
<?php
session_start();
require './header_docente.php';
require './welcome.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/docente.php';
$d = new docente();

$grado = "";
$seccion = "";
$curso = "";
$codigo = "";

if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
}
$rs = $d->lista_docente_act($codigo);
$rsg = $d->lista_docente_act_g($codigo);
?>
<div  align="center" style="padding: 40px; width: 40%;display: inline-block;vertical-align: top;">
    <form method="POST" action="consultarNotas.php">


        <table class="table">
            <tr>
                <td>Grado:</td>
                <td><select name="listGrado" class="form-control" style="width:200px">
                        <?php
                        foreach ($rsg as $val) {
                            $grado = '<option>' . $val['grado'] .'</option>';
                            echo $grado;
                        }
                        ?>       
                    </select></td>
                <td>SECCIÓN:</td>
                <td><select name="listSecc" class="form-control"  style="width:200px">
                      <?php
                        foreach ($rsg as $val) {
                            $seccion = '<option>' . $val['seccion'] . '</option>';
                            echo $seccion;
                        }
                        ?>  

                    </select></td>
                <td></td>
            </tr>
            <tr>
                <td>CURSO:</td>
                <td colspan="4"><select name="listCurso" class="form-control"  style="width:500px">
                        <?php
                        foreach ($rs as $val) {
                            $curso = '<option>' . $val['curso'] . '</option>';
                            echo $curso;
                        }
                        ?>  

                    </select></td>
            </tr>
            <tr>
                <td colspan="6" align="center"><button class="btn btn-success" style="width: 50%">CONSULTAR</button></td>
            </tr>
        </table>
    </form>
    
</div>
<br>
<br>
<div style="border: 1px solid ; width: 100%;box-shadow: 1px 1px 1px 1px #000000">
        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>