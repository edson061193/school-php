<!DOCTYPE html>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/validaciones.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
<html>
    <head>                
        <?php
        require_once './inc/header.php';
        ?>
    </head>
    <body>
        <br>
        <br>

        <div  style="height: auto;width:65%;float:right;background-color:#f6f6f6" class="poss">
            <div style="float:right;width:90%">
            <form  action="CONTROLADOR/registrar_apoderado.php" method="POST" enctype="multipart/form-data" style="width: 100%">
                
                 <div> <h5 style="border-bottom:10px solid #57a39d">Preinscripción Datos del Apoderado</h5></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ingrese su DNI:</th>
                            <th><input class="form-control" type="text" onkeypress="ValidaSoloNumeros()" name="txtDNI" maxlength="8" placeholder="DNI"/></th>
                        </tr>
                        <tr>
                            <th>Apellidos:</th>
                            <th><input class="form-control" type="text" onkeypress="txNombres()" name="txtApellido" placeholder="Ingrese sus Apellidos" /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Nombres:</th>
                            <th><input class="form-control"  onkeypress="txNombres()"type="text" name="txtNombres" placeholder="Ingrese sus Nombres" /></th>
                        </tr>
                        <tr>
                            <th>Dirección:</th>
                            <th><input class="form-control"type="text" onkeypress="txNombres()" name="txtDireccion" placeholder="Ingrese su Dirección" /></th>
                        </tr>
                        <tr>
                            <th>Telefono/celular:</th>
                            <th><input class="form-control"type="text" name="txtTlf" onkeypress="ValidaSoloNumeros()" maxlength="10" placeholder="Ingrese Telefono" /></th>
                        </tr>
                        <tr>
                            <th>Sexo:</th>
                            <th>
                                <input type="radio" class="radio-inline"name="grpSEXO" value="M" />Masculino
                                <input type="radio" class="radio-inline"name="grpSEXO" value="F" />Femenino
                            </th>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <th><input class="form-control"type="email" name="txtEmail" placeholder="Ingrese su Correo electronico"></th>
                        </tr> 
                        <tr>
                            <th>Ingrese copia de DNI</th>
                            <th><input type="file" name="copiaDNI"></th>
                        </tr>
                        <tr>
                            <th>Ingrese copia de Recibo (LUZ ó Agua)</th>
                            <th><input type="file" name="copiaRecibo"></th>
                        </tr>
                        <tr>                          
                            <th>Ingrese copia de Pago $</th>
                            <th><input type="file" name="copiaPago"></th>
                        </tr>
                        <tr> 
                            <td></td>   
                            <td></td>   
                        </tr>
                        <tr >
                            <td  colspan="2" align="center"><button class="btn btn-danger">SOLICITAR</button></td>
                        </tr>        
                    </tbody>
                </table>
               
            </form>
            </div>
            </div>
             
        <div style="width:28%;height:auto; padding:2%;float:right;border:10px solid #57a39d" class="poss">
<form>
<div>Ingrese Grado: <input type="text" name="txt_grado" placeholder="Ingrese Grado" class="form-control">
</div><br>
<div>Ingrese Sección: <input type="text" name="txt_secc" placeholder="Ingrese Grado" class="form-control">
</div>
<br>
<br>
<div><button class="btn btn-danger">Consultar</button><a href="#"><button class="btn btn-primary">ver disponible</button></a>
    <br>
    
</div>
</form>
<div id="resultado">
<?php
if(isset($_GET['txt_grado'])&&isset($_GET['txt_secc'])){

require_once("./MODELO/aula.php");
require_once("./MODELO/conexion.php");
$aula = new aula();
$val=$aula->verifiaAulaClases($_GET['txt_grado'] , $_GET['txt_secc']);
$codigoAula="";
$capacidad="";
$ocupados="";
$disponible="";
$fecha= date("Y");
foreach ($val as $variable) {
   echo 'capacidad : '.$variable['capaci__aula'].' alumnos <br>';
   $codigoAula=$variable['codigo_aula'];
   $capacidad=$variable['capaci__aula'];
}

$valx=$aula->ocupadoAulaClases($codigoAula,$fecha);
foreach ($valx as $variable) {
   echo 'ocupados : '.$variable['ocupados'].' alumnos <br>';
   $ocupados=$variable['ocupados'];
   echo 'Disponible : '.($capacidad-$ocupados);
}
}
else{
    echo "...  ...";
}
?>
</div>
<div><h4 class="h6">Su Aprobación se hara en 24hras , debera Verificar su E-mail para su ID/CLAVE"</h4></div>
        </div>

        <style type="text/css">.poss{display: inline-block;vertical-align: top;}</style>
       

    </body>   
</html>
