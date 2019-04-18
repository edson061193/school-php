<script src="../js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    function  openVentana() {
        $(".ventana").slideDown("slow");
    }
    function  closeVentana() {
        $(".ventana").slideUp("slown");
    }
</script>
<?php
//session_start();
require_once '../VISTA/header_alumno.php';
require_once '../MODELO/conexion.php';
require_once '../MODELO/alumno.php';
require_once '../MODELO/matricula.php';

$alumno = new alumno();
$matricula = new matricula();

$fechaAnterior = date("Y") - 1;
$codigoAlumno = "";
$estadoMatricula = "";
$estadoAlumno = 0;

$aletPago = "Debe Realizar Pagos";
$log = 1;

if (isset($_SESSION['codigo'])) {
    $codigoAlumno = $_SESSION['codigo'];
    $vmActual = $matricula->valida_matricula($codigoAlumno);
    $rp = $alumno->validar_pago($codigoAlumno);
    foreach ($rp as $pago) {
        if ($pago['estad__pago'] == 1) {
            $aletPago = "Matricula Habilitada";
        }
    }
    ?>

    <h4 class="textAlumno"><?php echo 'Matricula Alumno : ' . $_SESSION['xnombre']; ?></h4>

    <div style="background-color: #e2e2e2;height: 600px;padding: 2% 10%;border-top: 4px solid #57a39d ">
        <br>
        <div align="center"><b><h4 class="textxxx"><?php echo $aletPago; ?></h4></b></div>
        <br>
        <form action="../CONTROLADOR/matricula_Alumno.php" method="POST">
            <table class="table">


                <tr>
                    <td><b class="textxxx">Grado:</b>
                        <!--                        </td>
                                                <td>-->
                        <select class="form-control" name="cbo_grado">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </td>
                    <td><b class="textxxx">Seccion:</b>
                        <!--                        </td>
                                                <td>-->
                        <select class="form-control" name="cbo_seccion">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>                                
                        </select>
                    </td>
                </tr>
                <tr>
                    <?php
                    $v = "";
                    foreach ($vmActual as $val) {
                        $v = $val['codigo___matricula'];
                    }
                    if ($v != null) {
                        echo '<td colspan="4" align="center"><h4>Ud. ya Esta Matriculado<h4></td>';
                    } else {
                        echo '<td colspan="4" align="center"><button class="btn btn-danger">MATRICULAR</button></td>';
                    }
                    ?>

                </tr>
            </table>
        </form>
        <a href="javascript: openVentana();">
            <button class="btn btnNaranja" >ver detalle</button>  
        </a>


    </div>




    <div class="ventana fondoFormulario">

        <div class="formulario ">

            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Detalle del año <?php echo date("Y") - 1; ?></h4> 
           
                 <h4  style="color: #999999;font-size: 14px"> Cursos Aprobados :</h4>
                       
                            <h4  style="color: red;font-size: 14px">3</h4>
                      

                   <h4 style="color: #999999;font-size: 14px">Cursos Desaprobados :</h4>
                            <h4  style="color: blue;font-size: 14px">11</h4>
                     
                
            <h6 class="textAlumno"style="border-bottom: 1px solid #e5f5f6" >Cursos  :</h6>
                <h6>Matematica</h6>
                <h6>Lenguaje</h6>
               <h6>Ingles</h6>
                <h6>Religion</h6>
               <h6>Fisica Elemental</h6>
                   
               <h6 class="textAlumno" style="border-bottom: 1px solid #e5f5f6">Estado del Alumno :</h6> 
                        <h4  style="color: #000;font-size: 14px">Repitente</h4>
                   


        </div>
    </div>

    <?php
} else {
    header("Location: ../cerrar_session.php");
}