<?php  
require_once('./header_director.php');
require_once('../MODELO/curso.php');
require_once('../MODELO/conexion.php');

$curso = new curso();

?>
<html>

<body>
<div style="width:100%"><h6>Registro y/o Actualización de horario de Clases :</h6></div>
<div class="alxy">
	<form method="POST" action="../CONTROLADOR/sess.php?x=horario">

<div class="alx"><input class="form-control" type="text" name="listGrado" placeholder="Ingrese Grado:" ></div>
<div class="alx"><input class="form-control" type="text" name="listSecc" placeholder="Ingrese Sección:"  ></div>
<div class="alx"><button class="btn btn-primary ">Ir</button></div>

	</form>
	</div>
	<br>
<?php 

session_start();
if(isset($_SESSION['listGrado'])&&isset($_SESSION['listSecc'])){
 $rs=$curso->validar_carga_lectiva($_SESSION['listGrado'],$_SESSION['listSecc']);
echo "Rigistraras  en ".$_SESSION['listGrado'].' / '.strtoupper($_SESSION['listSecc']).'  ';
echo "<a href='javascript: openVentana();''>   VER Completo </a><br>";
}
?>
<table class="table">
<tr>

<td class="btn-info">LUNES</td>
<td class="btn-info">MARTES</td>
<td class="btn-info">MIERCOLES</td>
<td class="btn-info">JUEVES</td>
<td class="btn-info">VIERNES</td>

</tr>
<tr>

<td>
	<form action="../CONTROLADOR/horario.php?d=lunes" method="POST">
	<input type="text" class="form-control" name="txtDocente" placeholder="nombre docente" >
	<input type="text" class="form-control" name="txtCurso" placeholder="nombre curso">
	<input type="text" class="form-control" name="txtIncio" placeholder="hora Inicio">
	<input type="text" class="form-control" name="txtFin" placeholder="hora final">
	<button class="btn btn-danger" style="width:100%">Confirmar</button>
	</form>
</td>
<td>
	<form action="../CONTROLADOR/horario.php?d=martes" method="POST">
	<input type="text" class="form-control" name="txtDocente" placeholder="nombre docente" >
	<input type="text" class="form-control" name="txtCurso" placeholder="nombre curso">
	<input type="text" class="form-control" name="txtIncio" placeholder="hora Inicio">
	<input type="text" class="form-control" name="txtFin" placeholder="hora final">
	<button class="btn btn-danger" style="width:100%">Confirmar</button>
	</form>
</td>
<td>
	<form action="../CONTROLADOR/horario.php?d=miercoles" method="POST">
	<input type="text" class="form-control" name="txtDocente" placeholder="nombre docente" >
	<input type="text" class="form-control" name="txtCurso" placeholder="nombre curso">
	<input type="text" class="form-control" name="txtIncio" placeholder="hora Inicio">
	<input type="text" class="form-control" name="txtFin" placeholder="hora final">
	<button class="btn btn-warning" style="width:100%">Confirmar</button>
	</form>
</td>
<td>
	<form action="../CONTROLADOR/horario.php?d=jueves" method="POST">
	<input type="text" class="form-control" name="txtDocente" placeholder="nombre docente" >
	<input type="text" class="form-control" name="txtCurso" placeholder="nombre curso">
	<input type="text" class="form-control" name="txtIncio" placeholder="hora Inicio">
	<input type="text" class="form-control" name="txtFin" placeholder="hora final">
	<button class="btn btn-success" style="width:100%">Confirmar</button>
	</form>
</td>
<td>
	<form action="../CONTROLADOR/horario.php?d=viernes" method="POST">
	<input type="text" class="form-control" name="txtDocente" placeholder="nombre docente" >
	<input type="text" class="form-control" name="txtCurso" placeholder="nombre curso">
	<input type="text" class="form-control" name="txtIncio" placeholder="hora Inicio">
	<input type="text" class="form-control" name="txtFin" placeholder="hora final">
	<button class="btn btn-success" style="width:100%">Confirmar</button>
	</form>
</td>


</tr>
</table>
<?php


?>

</body>
<style type="text/css">
.alx{
	vertical-align: top;
	display: inline-block;
}
.alxy{
	display: block;
}
.sz{
	width: 19%;
}
.h7{
	font-size: 10px;
}
.h6x{
	font-size: 9px;
	color: blue;
}
</style>



 		<script src="../js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            function  openVentana() {
                $(".ventana").slideDown("slow");
            }
            function  closeVentana() {
                $(".ventana").slideUp("slown");
            }
        </script>

<div class="ventana fondoFormulario">
        <div class="formulariox">
            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
          
           <div class="alxy">
              <div class="alx sz">
                <table class="table">
                 <tr><td>LUNES</td></tr>
                
                 <?php   $rlu= $curso->horario_por_dia_gs($_SESSION['listGrado'],$_SESSION['listSecc'],'lunes');
                  foreach ($rlu as $keyl ) {
                  	echo " <tr><td><h5 class='h5'>".$keyl['nombre__curso']."</h5>";
                  	echo "<h6 class='h6x'>".$keyl['n']."</h6>";
                  	echo "<h6 class='h7'>".$keyl['hora_inicio']."-".$keyl['hora_fin']."</h6></td></tr>";
                  }
                 ?>
             
                </table>
              </div>
              <div class="alx sz">
                <table class="table">
                 <tr><td>MARTES</td></tr>
                 <?php   $rlu= $curso->horario_por_dia_gs($_SESSION['listGrado'],$_SESSION['listSecc'],'martes');
                  foreach ($rlu as $keyl ) {
                  	echo " <tr><td><h4 class='h5'>".$keyl['nombre__curso']."</h4>";
                  	echo "<h5 class='h6x'>".$keyl['n']."</h5>";
                  	echo "<h6 class='h7'>".$keyl['hora_inicio']."-".$keyl['hora_fin']."</h6></td></tr>";
                  }
                 ?>
                </table>
              </div>
              <div class="alx sz">
                <table class="table">
                 <tr><td>MIERCOLES</td></tr>
                 <?php   $rlu= $curso->horario_por_dia_gs($_SESSION['listGrado'],$_SESSION['listSecc'],'miercoles');
                  foreach ($rlu as $keyl ) {
                  	echo " <tr><td><h4 class='h5'>".$keyl['nombre__curso']."</h4>";
                  	echo "<h5 class='h6x'>".$keyl['n']."</h5>";
                  	echo "<h6 class='h7'>".$keyl['hora_inicio']."-".$keyl['hora_fin']."</h6></td></tr>";
                  }
                 ?>
                </table>
              </div>
              <div class="alx sz">
                <table class="table">
                 <tr><td>JUEVES</td></tr>
                 <?php   $rlu= $curso->horario_por_dia_gs($_SESSION['listGrado'],$_SESSION['listSecc'],'jueves');
                  foreach ($rlu as $keyl ) {
                  	echo " <tr><td><h4 class='h5'>".$keyl['nombre__curso']."</h4>";
                  	echo "<h5  class='h6x'>".$keyl['n']."</h5>";
                  	echo "<h6 class='h7'>".$keyl['hora_inicio']."-".$keyl['hora_fin']."</h6></td></tr>";
                  }
                 ?>
                </table>
              </div>
              <div class="alx sz">
                <table class="table">
                 <tr><td>VIERNES</td></tr>
                <?php   $rlu= $curso->horario_por_dia_gs($_SESSION['listGrado'],$_SESSION['listSecc'],'viernes');
                  foreach ($rlu as $keyl ) {
                  	echo " <tr><td><h4 class='h5'>".$keyl['nombre__curso']."</h4>";
                  	echo "<h5 class='h6x'>".$keyl['n']."</h5>";
                  	echo "<h6 class='h7'>".$keyl['hora_inicio']."-".$keyl['hora_fin']."</h6></td></tr>";
                  }
                 ?>
                </table>
              </div>
              
           </div>
        </div>
    </div>
</html>