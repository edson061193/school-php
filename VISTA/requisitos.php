 <?php
        require_once 'header_director.php';
        ?>
<html>

<body>
<div style="text-align:center" align="center">
	
	<div style="width:100%;float: right;">
    <form action="#" method="POST" enctype="multipart/form-data">
     <div><h6 class="h6xy">ingrese copia de DNI : </h6><input type="file" name="txtCDNI" class="form-control" ></div>
     <div><h6 class="h6xy">partida de Nacimiento : </h6><input type="file" name="txtCpNaciento" class="form-control"></div>
     <div><h6 class="h6xy">Ficha Matricula 01 : </h6><input type="file" name="txtCFM1" class="form-control" require=""></div>
     <div><h6 class="h6xy">Ficha Matricula 02 : </h6><input type="file" name="txtCFM2" class="form-control"></div>
     <div><h6 class="h6xy">Constancia de Translado : </h6><input type="file" name="txtCConstancia" class="form-control"></div>
    <br>
     <div><button class="btn btn-default" >Registrar</button></div>
    </form>
	</div>
</div>
</body>
<style type="text/css">
.h6xy{

	float: left;
	font-family: Calibri,Arial;
	border-bottom: 1px solid #57a39d;
	width: 30%;

}
</style>
</html>