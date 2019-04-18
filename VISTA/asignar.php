<?php
session_start();
require_once './header_docente.html';

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
$rsg = $d->lista_docente_act_g($codigo);?>
<div  align="center" style="padding: 30px; width: 90%;display: inline-block;vertical-align: top;float:right">
    <form method="POST" action="../CONTROLADOR/sess.php?p">
        
               <div style="background-color: #000000;color: white;padding: 1%;text-align: center">
            <h4 >ASIGNAR NOTAS DE LOS ALUMNOS</h4>
            
            </div>
            <div style="float:left">
                <h6>Grado:</h6><select name="listGrado" class="form-control" style="width:200px">
                        <?php
                        foreach ($rsg as $val) {
                            $grado = '<option>' . $val['grado'] .'</option>';
                            echo $grado;
                        }
                        ?>       
                    </select>
                    </div>
            <div style="float:left">
                <h6>SECCIÓN:</h6>
                <select name="listSecc" class="form-control"  style="width:200px">
                      <?php
                        foreach ($rsg as $val) {
                            $seccion = '<option>' . $val['seccion'] . '</option>';
                            echo $seccion;
                        }
                        ?>  

                    </select>
            </div>
            <div style="float:left">
                <h6>CURSO:</h6>
               <select name="listCurso" class="form-control"  style="width:500px">
                        <?php
                        foreach ($rs as $val) {
                            $curso = '<option>' . $val['curso'] . '</option>';
                            echo $curso;
                        }
                        ?>  

                    </select>
            </div>
            
            <div style="float:left">
             <h6>...</h6>
              <button class="btn btn-success" style="width: 100%">CONSULTAR</button>
            </div>
      
        <div id="ajax_loader"><img id="loader_gif" src="loader.gif" style=" display:none;"/></div>
    </form>

    
</div>

<?php 
$grado="";
$codig_curso = "";
$codigo_docente = "";
$codigo_aula = "";
$codigo_alumno;
$trimestre;

if (isset($_SESSION['listGrado'])) {
    $grado = $_SESSION['listGrado'];
    $seccion = $_SESSION['listSecc'];
    $curso = $_SESSION['listCurso'];

require_once '../MODELO/trimestre_periodo.php';

$tr = new trimestre_periodo();
$val = $tr->listas_codigos($grado, $seccion, $curso);

foreach ($val as $rs) {
    $codig_curso = $rs['codigo_curso'];
    $codigo_aula = $rs['codigo_aula'];
}
$val_alum = $tr->alumnos_asig_notas($codig_curso, $grado, $seccion);
?>
<style type="text/css"></style>
<div style="width: 90%;float:right;">
     <table class="table">
        <thead style="background-color: #ffccc6">
            <tr>
                <td>Codigo  :</td>
                <td><b><?php echo $codig_curso ?></b></td>
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
    <div style="width:100%"><a href="../VISTA/consultarNotas.php" ><button class="btn btn-danger" >Ver Todos</button></a></div>
    <br>

    <table class="tablex">
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
                <td class="px">calcular</td>
               
            </tr>

        </thead>
        
 
  <style>
                        .tablex{
                                width: 100%;
                                
                        }
                       
                        .formx{
                                    width: 100%;
                                }
                               
                                    tr td{
                                        /*width: 100px;*/
                                        border-bottom: 1px solid ;
                                        
                                    }
                                    .px{
                                        
                                        margin: 1%;

                                    }
                                    #f{
                                        padding: 0%;
                                        margin: 0%;
                                    }
                                  
    </style>
<script src="../js/jquery.js"></script>
<script src="../js/vn.js"></script>
    <?php
    foreach ($val_alum as $value) {
        if($value['promedio_general'] <11){
            ?>
  
    <?php
        }if($value['promedio_general'] >10){
                 ?>
  
    <?php
        }
        echo '<form id="f" action="../CONTROLADOR/archivar_notas.php" method="POST">
        <tr>
              <td class="px"><input  class="formx" type="text" name="tc"           value="' . $value['codigo_alumno'] . '" ></td>
              <td class="px"><input  class="formx" type="text" name="txt_nombre"   value="' . $value['nombre__alumno'] . '" disabled></td>
              <td class="px"><input  class="formx" type="text" name="txt_apellido" value="' . $value['apelli__alumno'] . '" disabled></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtNT" value="' . $value['nota_trabajos'] . '" maxlength="2" required=""></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtP1" value="' . $value['promedio_01'] . '" maxlength="2" required=""></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtP2" value="' . $value['promedio_02'] . '" maxlength="2" required=""></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtP3" value="' . $value['promedio_03'] . '" maxlength="2" required=""></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtPA" value="' . $value['nota_actitud'] . '"maxlength="2"required=""></td>
              <td class="px"><input  class="formx" type="text" onkeypress="return compruebacampo()" name="txtPromedio" value="' . $value['promedio_general'] . '" disabled></td>
              <input  class="form-control" type="hidden" name="txtcod_curso" value="' . $codig_curso . '"></td> 
                <td ><button class="btn btn-primary">Aceptar</button></td>';
        echo '    </tr>';
        echo '</form>';
    }
    ?>
</table>
<br>
    <a href="../pdf/actas.php"><button class="btn btn-primary" width="300px">IMPRIMIR ACTAS</button></a>
</div>

<?php
}
?>