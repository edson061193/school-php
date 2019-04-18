<?php
require_once '../MODELO/conexion.php';
require_once '../MODELO/docente.php';
require_once '../MODELO/curso.php';
$docente = new docente();
$curso = new curso();

$codigo_docente = "";
$apellidos = "";
$nombres = "";
session_start();
$grado = "";
$seccion = "";
if (isset($_SESSION['g'])) {
    $grado = $_SESSION['g'];
    $seccion = $_SESSION['s'];
}
if (isset($_SESSION['codigo'])) {
    require_once '../VISTA/header_director.php';
    ?>

            <!--<script type="text/javascript" src="../js/jqueryui.js"></script>-->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jqueryui.js"></script>
    <script type="text/javascript">
        var x;
        x = $(document);
        x.ready(inicio);
        function inicio() {
            var posibilidades = [
    <?php
    $resultado = $docente->lista_docente();
    while ($fila = mysqli_fetch_array($resultado)) {

        echo '  "' . $fila['apelli_docente'] . ' ",';
        echo '  "' . $fila['nombre__docente'] . ' ",';
        echo '  "' . $fila['dni__docente'] . ' ",';
    }
    ?>
            ];
            x = $(".completar_d");
            x.autocomplete({source: posibilidades});
    //        x = $("#busca_docente");
    //        x.autocomplete({source: posibilidades});
            inic();
        }
        function inic() {
            var posibilidades = [
    <?php
    $result = $curso->listaCursos_p($grado, $seccion);
    while ($fila = mysqli_fetch_array($result)) {

        echo '  "' . $fila['nombre__curso'] . ' ",';
    }
    ?>
            ];
            x = $("#completar_c");
            x.autocomplete({source: posibilidades});
        }


    </script>
    <?php
//    if(isset($_GET['x'])==0){
//        echo '<center><div><b><u><p>REGISTRO MODIFICADO CORRECTAMENTE </p></u></b></div></center>';
//    }
    ?>
    <style>
        .posx{
            display: inline-block;
            vertical-align: top;
            padding: 3px;
        }
        .subcont{
            width: 45%;
         
        }
    </style>

    <div style="width: 100%;">
        <div style="width: 100%;" >
            <div class="subcont posx" >
                        <div class="posx">
                            <input   id="buscaAjax"  class="form-control "type="text" name="val" maxlength="2" id="buscar_grado" placeholder="Ingrese Grado y Seccion">
                        </div>
                        <div class="posx">
                            <button  id="buscador"class=" btn btn-warning" style="width: 120%" ><img style="width: 20px;"src="../img/search-32.png"></button>
                        </div>
            </div>
            <div class="subcont posx" style="float: right">
                <div class="posx">
                    <input  id="buscaAjax2" class="completar_d form-control "type="search" name="val2"  placeholder="ingrese nombre o ID docente">

                </div>
                <div class="posx">
                    <button class=" btn btn-success " style="width: 120%" id="buscadorXdocente"><img style="width: 20px;"src="../img/search-32.png"></button>

                </div>

            </div>
        </div>
    </div>
    
    
       <ul>
                <li>
                    <h2>asignar carga Lectiva</h2>
                </li>
            </ul>
    
    
    <div class="contenedor_principal" align="center" style="width: 100%;">
        <!--<div style="padding: 2px;border-radius: 10px 10px 0px 0px;"class="colorhead"><h1 class="element">ASIGNAR CARGA LECTIVA</h1></div>-->
        <div style=" padding: 10px 10px;width: 100%">



          
            <form action="../CONTROLADOR/registrarCargaLectiva.php" method="POST">
                <table class="table">
                    <tr class="caption">
                        <td> Docente:<input type="text" class="form-control completar_d"  placeholder="Buscar Curso" size="50px" name="txt_docente">
                        <td>Año Academico:<input type="text"class="form-control"  name="txt_academico" value="<?php echo date('20y') . 'PRG'; ?>">
                        <td>Curso:<input type="text"class="form-control" id="completar_c" placeholder="ingrese el curso"  name="txt_curso">
                        <td> Grado:<select  class="form-control"name="cboGrdo">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>             
                        </td>
                        <td> Sección:<select  class="form-control"name="cboSeccion">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>                        
                            </select>             
                        </td>
                        <td><br><button class="form-control" style="background-color: #ff6666">Asignar</button></a>  </td>

                    </tr>
                </table>

            </form>
            <div id="contenedor_garca_lectiva">

            </div>
        </div>

    </div>
    <?php
} else {
    header("Location: ../cerrar_session.php");
}
?>

<script type="text/javascript">
    var x;
    x = $(document);
    x.ready(inicio);

    function inicio()
    {
        var x;
        x = $("#buscador");
        x.click(enviar);
        x = $("#buscadorXdocente");
        x.click(enviar2);
    }
    function enviar()
    {
        var v = $("#buscaAjax").attr("value");
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url: "../ajax/ajax_validar_cargaLectiva.php",
            data: "val=" + v,
            beforeSend: inicioEnvio,
            success: llegada,
            timeout: 4000,
            error: problemas
        });
        return false;
    }
    function enviar2()
    {
        var v = $("#buscaAjax2").attr("value");
        $.ajax({
            async: true,
            type: "POST",
            dataType: "html",
            contentType: "application/x-www-form-urlencoded",
            url: "../ajax/ajax_validar_cargaLectiva_1.php",
            data: "val2=" + v,
            beforeSend: inicioEnvio,
            success: llegada,
            timeout: 4000,
            error: problemas
        });
        return false;
    }
    function inicioEnvio()
    {
        var x = $("#contenedor_garca_lectiva");
        x.html('Cargando...');
    }
    function llegada(datos)
    {
        $("#contenedor_garca_lectiva").html(datos);
    }
    function problemas()
    {
        $("#contenedor_garca_lectiva").text('Problemas en el servidor.');
    }
</script>

