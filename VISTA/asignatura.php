 <?php
        require_once 'header_director.php';
        require_once'../MODELO/asignaturas.php';
        require_once'../MODELO/conexion.php';
        $asignaturas= new asignaturas();
        ?>
        <html>
   
        <link href='../../disen_PHP/css/general_style.css' type="text/css" rel="stylesheet">
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            function  openVentana() {
                $(".ventana").slideDown("slow");
            }
            function  closeVentana() {
                $(".ventana").slideUp("slown");
            }
        </script>

        <body>
               <div class="alinear" style="float: left;width: 100%;">

                <a href="javascript: openVentana();"> <button  class="btn btn-danger">registrar Curso(Asignatura)</button></a>
                <input type="text" name="txtBuscar" id="buscador" ><a href="#" ><button >Buscar</button></a>
            </div>
            <br>

<div style="width:100%;display:block;vertical-aling:top">
<table  class="tablex">
<tr>
    <td class=" colorx pos">codigo</td>
    <td class=" colorx ">nombre</td>
    <td class=" colorx pos">H.Teoría</td>
    <td class=" colorx pos">H.Práctica</td>
    <td class=" colorx pos">Grado</td>
    <td class=" colorx">Nivel Acedemico</td>
    <td class=" colorx pos">modificar</td>
    <td class=" colorx">eliminar</td>
</tr>


<?php 
$rs= $asignaturas->listarAsignaturas();
foreach ($rs as $key) {
	
echo "<form action='../CONTROLADOR/asignatura.php' method='POST'><tr>
<td class='pos'><input class='fcontrolx' type='text' name='px' value='".$key['codigo_curso']."'></td>
<td><input class='fcontrolx' type='text'  name='txtNombreA'  value='".$key['nombre__curso']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='txtHteoriaA' value='".$key['hrteor__curso']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='txtHpracA' value='".$key['hrprac__curso']."'></td>
<td class='pos'><input class='fcontrolx' type='text'  value='".$key['aacade__curso']."'></td>
<td><input class='fcontrolx' type='text' name='cboGrado' value='".$key['nivel_acedemico']."'></td>
<td class='pos'><button class='btn btn-default' >Editar</botton></td>
<td class='pos'><a href='../CONTROLADOR/asignatura.php?x=".$key['codigo_curso']."'>dar de baja</a></td>
</tr></form>";	
	
}
?>
</table>
</div>
<form ></form>
<style type="text/css">
.colorx{
  
    border-bottom: 3px solid #6f6f6f;
}
.fcontrolx{
    width: 100%;
    padding: 2%;


}
.pos{
    width: 10%;

}
.tablex{

    width: 100%;
    padding: 2%;
    border: 1px;
}
</style>
      
<div class="ventana fondoFormulario">
        <div class="formulario ">
            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Registrar Nueva Asignatura</h4>
            <form action="../CONTROLADOR/asignatura.php" method="POST" >



				<div><h6>Codigo:</h6> <input type="text" class="form-control btn-default"  name="txtCodigoA" required=""></div>
				<div><h6>Nombre:</h6> <input type="text" class="form-control btn-default"  name="txtNombreA" required=""></div>
				<div><h6>H.Teoría:</h6> <input type="text" class="form-control btn-default"  name="txtHteoriaA" required=""></div>
				<div><h6>H.Práctica</h6> <input type="text" class="form-control btn-default"  name="txtHpracA" required=""></div>
				<div><h6>Grado:</h6> 
                    <select name="cboGrado" class="form-control">
                    <option value="1">1ero</option>
                    <option value="2">2do</option>
                    <option value="3">3ero</option>
                    <option value="4">4to</option>
                    <option value="5">5to</option>
                    <option value="6">6to</option>

                </select>
                </div>
				<div><h6>Nivel Acedemico</h6>
                 <select name="cboNivel" class="form-control">
                    <option>PRIMARIA</option>
                    <option>SECUNDARIA</option>

                </select>
             </div>
				<br>
					<div><button class="btn" style="background-color: #d01c32;width: 70%;">Aceptar</button></div>
                    


            </form>
        </div>
    </div>
    <?php 

if(isset($_GET['m'])){
  if($_GET['m']==1){
            ?>
            <script type="text/javascript">alert("Registro  correctamente ...  :) ")</script>
            <?php
  }
  if($_GET['m']==2){
            ?>
            <script type="text/javascript">alert("Update  correctamente ...  :) ")</script>
            <?php
  }
  if($_GET['m']==3){
           ?>
            <script type="text/javascript">alert("Delete  correctamente ...  :) ")</script>
            <?php
  }
	
}



    ?>
        </body>
        </html>