 <?php
        require_once 'header_director.php';
        require_once'../MODELO/aula.php';
        require_once'../MODELO/conexion.php';
        $aula= new aula();
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

                <a href="javascript: openVentana();"> <button  class="btn btn-danger">registrar clason de clases  (Habilitadas)</button></a>
                <input type="text" name="txtBuscar" id="buscador" ><a href="#" ><button >Buscar</button></a>
            </div>
            <br>

<div style="width:100%;display:block;vertical-aling:top">
<table  class="tablex">
<tr>
    <td class=" colorx pos">codigo</td>
    <td class=" colorx ">ubigeo</td>
    <td class=" colorx pos">grado</td>
    <td class=" colorx pos">Sección</td>
    <td class=" colorx pos">Capacidad Max</td>
    <td class=" colorx">Estado.</td>
    <td class=" colorx">N.Academico.</td>
    <td class=" colorx pos">modificar</td>
    <td class=" colorx">eliminar</td>
</tr>


<?php 
$rs= $aula->listarSalonClass();
foreach ($rs as $key) {
	
echo "<form action='../CONTROLADOR/sclases.php' method='POST'><tr>
<td class='pos'><input class='fcontrolx' type='text' name='px' value='".$key['codigo_aula']."'></td>
<td><input class='fcontrolx' type='text'  name='txtUbig'  value='".$key['ubigeo__aula']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='txtGrado' value='".$key['grado___aula']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='txtSecc' value='".$key['seccio__aula']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='txtCapac' value='".$key['capaci__aula']."'></td>
<td class='pos'><input class='fcontrolx' type='text' name='cboEstado' id='filEstado' value='".$key['estado__aula']."'></td>
<td><input class='fcontrolx' type='text' name='cboNivel' value='".$key['nivel_academico']."'></td>
<td class='pos'><button class='btn btn-default' >Editar</botton></td>
<td class='pos'><a href='../CONTROLADOR/sclases.php?x=".$key['codigo_aula']."'>dar de baja</a></td>
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
table tr td:hover{
    background-color: #000000;
}
</style>
      
<div class="ventana fondoFormulario">
        <div class="formulario ">
            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Registrar Salon de Clases</h4>
            <form action="../CONTROLADOR/sclases.php" method="POST" >
				<div><h6>UBIGEO</h6> <input type="text" class="form-control btn-default"  name="txtUbig" required=""></div>
				<div><h6>GRADO:</h6> <input type="text" class="form-control btn-default"  name="txtGrado" ></div>
				<div><h6>SECCIÓN:</h6> <input type="text" class="form-control btn-default"  name="txtSecc" ></div>
				<div><h6>CAPACIDAD</h6> <input type="text" class="form-control btn-default"  name="txtCapac" required=""></div>
				<div><h6>ESTADO:</h6> 
                <select name="cboEstado" class="form-control">
                    <option value="HABILITADA">HABILITADA</option>
                    <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                    <option value="LABORATORIO HAB">LABORATORIO HAB</option>
                    <option value="LABORATORIO DESHAB">LABORATORIO DESHAB</option>
                    <option value="TALLER">TALLER</option>
                    <option value="TALLER">AUDITORIO</option>
                </select>
                </div>
				<div><h6>Nivel Acedemico</h6>
                 <select name="cboNivel" class="form-control">
                    <option></option>
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