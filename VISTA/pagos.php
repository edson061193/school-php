 <?php
        require_once 'header_director.php';
        require_once'../MODELO/pagos.php';
        require_once'../MODELO/conexion.php';

        $pago= new pagos();
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
               <div class="alinear" style="float: left;width: 10%;">

                <a href="javascript: openVentana();"> <button  class="btn btn-primary">REGISTRAR NUEVO PAGO</button></a>

            </div>
            <br>

<div style="width:100%;display:block;vertical-aling:top">
<table  class="tablex">
<tr>
    <td class=" colorx">codigo</td>
    <td class=" colorx">nombre</td>
    <td class=" colorx">monto</td>
    <td class=" colorx">caracteristica</td>
    <td class=" colorx">tipo</td>
    <td class=" colorx">update</td>
    <td class=" colorx">delete</td>
</tr>


<?php 
$rs= $pago->listarPagos();
foreach ($rs as $key) {
	
echo "<form action='../CONTROLADOR/pagos.php' method='POST'><tr>
<td><input class='fcontrolx' type='text' name='px' value='".$key['codigopagocarct']."'></td>
<td><input class='fcontrolx' type='text' name='txtNombrePago' value='".$key['nombrepago']."'></td>
<td><input class='fcontrolx' type='text' name='txtValor' value='".$key['monto_cpago']."'></td>
<td><input class='fcontrolx' type='text' name='txtCaracteristicas' value='".$key['caracteristica_cpago']."'></td>
<td><input class='fcontrolx' type='text' name='cboTipo' value='".$key['tipo']."'></td>
<td><button class='btn btn-default'>Editar</botton></td>
<td><a href='../CONTROLADOR/pagos.php?x=".$key['codigopagocarct']."'>eliminar</a></td>
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
.tablex{

    width: 100%;
    padding: 2%;
    border: 1px;
}
</style>
      










    <div class="ventana fondoFormulario">
        <div class="formulario ">
            <div class="cerrar"><a href="javascript: closeVentana();">cerrar x</a></div>
            <h4 class="textAlumno" style="border-bottom: 3px solid #97d9db">Registrar Nuevo Pago</h4>
            <form action="../CONTROLADOR/pagos.php" method="POST" >
		<div><h6>Nombre de  pago :</h6> <input type="text" class="form-control btn-default"  name="txtNombrePago" required=""></div>
		<div><h6>Valor a pagar S/. :</h6> <input type="text" class="form-control btn-default"  name="txtValor" required=""></div>
		<div><h6>caracteristicas :</h6> <input type="text" class="form-control btn-default"  name="txtCaracteristicas" required=""></div>
		<div><h6>Tipo</h6> <select name="cboTipo" class="form-control"><option>Obligatorio</option><option>Obsional</option></select> </div>
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