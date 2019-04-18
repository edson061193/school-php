<?php
require_once '../VISTA/header_director.php';
require_once '../MODELO/trimestre_periodo.php';
require_once '../MODELO/conexion.php';

$period = new trimestre_periodo();

$perido_c = date("Y") . 'PRG';
$nombre_anio = "";
$fecha_inicial = "";
$fecha_final = "";
$codigo_trimestre = "PRG" . date("Y") . "TR-" . "1";
$fecha_inicial_tr = "";
$fecha_final_tr = "";

$array = $period->mostrar_perido_clase($perido_c);
foreach ($array as $value) {
    if ($value['codigo_periodo'] != null) {
        $perido_c = $value['codigo_periodo'];
        $nombre_anio = $value['nombre__periodo'];
        $fecha_inicial = $value['fechaI__periodo'];
        $fecha_final = $value['fechaF__periodo'];
    }
}
?>
<!--<div class="bottom btn-danger" style="padding: 3px;text-align: center">
    <h4>ASIGNAR TRIMESTRES ACADEMICO</h4>
</div>
<br>-->
<style>
    .posx{
        width: 45%;
        padding: 1%;
        border-radius: 10px 10px 10px 10px;
        display: inline-block;
        vertical-align: top;
        height: 400px;
    }
    .c1,.c2{
 background: -moz-linear-gradient(top,  rgba(0,0,0,0.15) 0%, rgba(0,0,0,0) 72%, rgba(0,0,0,0) 90%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.15)), color-stop(72%,rgba(0,0,0,0)), color-stop(90%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.15) 0%,rgba(0,0,0,0) 72%,rgba(0,0,0,0) 90%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0.15) 0%,rgba(0,0,0,0) 72%,rgba(0,0,0,0) 90%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0.15) 0%,rgba(0,0,0,0) 72%,rgba(0,0,0,0) 90%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(0,0,0,0.15) 0%,rgba(0,0,0,0) 72%,rgba(0,0,0,0) 90%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */

    }
   
    table tr td{
        padding: 10px;
        width: 100%;
    }

   
</style>
<br>
<br>
<div style="width: 100%">
    <div  class="posx c1">
        <h4 class="element">REGISTRO DE PERIODO DE CLASES </h4>
        
        <!--<div style="display: inline-block;vertical-align: top">--> 
        <form action="../CONTROLADOR/registrar_periodo_clases.php" method="POST" >
            <table border="0" >

                <tr>
                    <td>codigo periodo </td>
                    <td colspan="3"><input type="text" name="txt_codigo_periodo" value="<?php echo $perido_c; ?>"class="form-control"required="" maxlength="7"></td>
                </tr>
                <tr>
                    <td>nombre  periodo </td>
                    <td colspan="3"><input type="text" name="txt_nombre_periodo" value="<?php echo $nombre_anio ?>"class="form-control"required="" maxlength="150"></td>
                </tr>
                <tr>
                    <td>inicio  periodo </td>
                    <td><input type="date" name="txt_inicio_periodo"required="" class="form-control"  value="<?php echo $fecha_inicial ?>"  ></td>
                    <td>fin  periodo </td>
                    <td><input type="date" name="txt_fin_periodo" size="100px"  class="form-control"  value="<?php echo $fecha_final ?>"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">  <button class="submit" type="submit">REGISTRAR</button></td>
                </tr>
            </table>
        </form>
        <!--</div>-->


    </div>

    <div style="float: right" class="posx c2">
        <h4 class="element" >REGISTRO DE TRIMESTRE DE CLASES</h4>
       
        <form action="../CONTROLADOR/trimestre_registro.php" method="POST">
            <table border="0">
               
                <tr>
                    <td>codigo trimeste </td>
                    <td colspan="3"><input type="text" name="txt_codigo_trimestre" class="form-control"required="" maxlength="12"></td>
                </tr>

                <tr>
                    <td>inicio  trimeste  </td>
                    <td><input type="date" name="txt_inicio_trimestre" required="" class="form-control"  ></td>
                    <td>fin  trimeste  </td>
                    <td><input type="date" name="txt_fin_trimestre" size="100px"  class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="4" align="center">  <button class="submit" type="submit">REGISTRAR</button></td>
                </tr>
            </table>
        </form>
    </div>

</div>




