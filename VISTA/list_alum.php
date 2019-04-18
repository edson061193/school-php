<?php

require_once '../VISTA/header_director.php';
require_once '../MODELO/alumno.php';
require_once '../MODELO/conexion.php';
$codigo=$_GET['x'];
$foto_alumno="";
$alumno = new alumno();

?>
<br>
<div class="table-responsive">
<table class="table tx">
    <tr>
        <td class="tdcolor2">#</td>
        <td class="tdcolor2">Codigo</td>
        <td class="tdcolor2">DNI</td>
        <td class="tdcolor2">Apellidos</td>
        <td class="tdcolor2">Nombres</td>
        <td class="tdcolor2">Fecha Nacimiento</td>
        <td class="tdcolor2">Fecha de Ingreso</td>
        <td class="tdcolor2">Identificador</td>
        <td class="tdcolor2">Apoderado</td>
        <td class="tdcolor2">Grado</td>
        <td class="tdcolor2">Sección</td>
        <td class="tdcolor2">Lugar de Clases</td>
    </tr>
<!--</table>
<table>-->
   <?php 
$resul=$alumno->ver_info_alumno($codigo);
$i=0;
while ($row = mysqli_fetch_array($resul)) {
    $i=1+$i;
    $i=$i;
    $foto_alumno=$row['foto__alumno'];
        echo '<tr>
        <td>'.$i.'</td>
        <td>'. $row['codigo_alumno'].'</td>
        <td>'. $row['dni__alumno'].'</td>
        <td>'.$row['apelli__alumno'].'</td>
        <td>'.$row['nombre__alumno'].'</td>
        <td>'.$row['fechaN__alumno'].'</td>
        <td>'.$row['fechaI__alumno'].'</td>
        <td>'.$row['iduser__alumno'].'</td>
        <td>'.$row['apelli__apoderado'].'  ,'.$row['nombre__apoderado'].'</td>
        <td>'.$row['grado___aula'].'</td>
        <td>'.$row['seccio__aula'].'</td>
        <td>'.$row['ubigeo__aula'].'</td>
    </tr>';
}

?> 
</table>
</div>
