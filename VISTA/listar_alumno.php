
    <?php
require_once '../VISTA/header_director.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/alumno.php';

$alumno = new alumno();
$array = $alumno->lista_alumno();

?>
<div  align="left">
    <div align="left" style="border: 1px solid #75AADB;width: 26.5% ; border-radius: 10px 10px 10px 10px;background-color: #BD532B;">
        <table>
            <tr>
                <td></td>
                <td> <input type="hidden"></td>
                <td><input class="form-control" placeholder="ingrese grado/sección" id="val_grado_seccion" maxlength="2"name="txtgradoSecc"></td>
                <td> <input type="hidden"></td>
                <td><button id="buscar_grado_seccion" style="width: 100%;background-color: #E7BA75;padding: 7px;border: 0px">consultar</button></td>
                <td><input type="hidden"> </td>
                <td><a href="../pdf/lista_alumnoPDF.php"><button style="border-radius: 0px 10px 10px 0px;width: 100%;background-color: #BD532B;color:#000;padding: 7px;border: 0px">imprimir all</button></a></td>
            </tr>
        </table>    
    </div>

<!--    <table>
        <th>
        <td>
            <input class="form-control" id="busca_alumno" type="search" name="txt_filtro" placeholder="Buscar...">
        </td>
        <td>
            <button    button class="btn btn-warning">Buscar</button>            
        </td>
        </th>
    </table>-->
</div>
<br>
<div id="lista_alumno">
    <?php
echo '<table class="table tablex">
    <th><td class="tdcolor">#</td><td class="tdcolor" colspan="2">CODIGO</td><td class="tdcolor">DNI</td><td class="tdcolor">APELLIDOS</td><td class="tdcolor">NOMBRES</td><td class="tdcolor">FECHA NACIMIENTO</td><td class="tdcolor">AÑO DE INGRESO</td><td class="tdcolor">SEXO</td><td class="tdcolor2">Editar</td><td class="tdcolor2">Ver info</td></th>
';
//echo '<table class="table">';
$i = 0;
while ($row = mysqli_fetch_array($array)) {
    $i = 1 + $i;
    $i = $i;
    echo '<tr><td colspan="2" align="center">' . $i . '</td><td colspan="2">' . $row['codigo_alumno'] . '</td><td>' . $row['dni__alumno'] . '</td><td>' . $row['apelli__alumno'] . '</td><td>' . $row['nombre__alumno'] . '</td><td>' . $row['fechaN__alumno'] . '</td><td>' . $row['fechaI__alumno'] . '</td><td>' . $row['sexo__alumno'] . '</td><td><a href="list_alum.php?x=' . $row['codigo_alumno'] . '"><img src="../img/edit-32.png"></a></td><td><a href="list_alum.php?x=' . $row['codigo_alumno'] . '"><button class="btn btn-default" >Ver</button></a></td></tr>
';
}
echo '</table>';
?>
</div>

<script type="text/javascript" src="js/jqueryui.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jqueryui.js"></script>
<script  type="text/javascript">
    x = $(document);
    x.ready(iniciar);
    function iniciar() {
        var probabilidas = [<?php
foreach ($array as $value) {
    echo '"' . $value['apelli__alumno'] . '",';
    echo '"' . $value['nombre__alumno'] . '",';
}
?>];
        x = $("#busca_alumno");
        x.autocomplete({source: probabilidas});
    }</script>
<script type="text/javascript">
    var x;
    x = $(document);
    x.ready(inicio);

    function inicio()
    {
        var x;
        x = $("#buscar_grado_seccion");
        x.click(enviar);
    }
    function enviar()
    {
        var v = $("#val_grado_seccion").attr("value");
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url: "../ajax/ajax_listar_alumno.php",
            data: "txtgradoSecc=" + v,
            beforeSend: inicioEnvio,
            success: llegada,
            timeout: 4000,
            error: problemas
        });
        return false;
    }
    function inicioEnvio()
    {
        var x = $("#lista_alumno");
        x.html('Cargando...');
    }
    function llegada(datos)
    {
        $("#lista_alumno").html(datos);
    }
    function problemas()
    {
        $("#lista_alumno").text('Problemas en el servidor.');
    }
</script>


 

