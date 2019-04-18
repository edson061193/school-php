<?php
require_once '../MODELO/matricula.php';
require_once '../MODELO/curso.php';
require_once '../MODELO/conexion.php';
$curso = new curso();
$matricula= new matricula();
$grado_seccion = $_POST['val'];
$grado = substr($grado_seccion, 0, 1);
$sec = substr($grado_seccion, 1, 2);
session_start();
//if(isset($_SESSION['codigo'])){
    $_SESSION['g']=$grado;
    $_SESSION['s']=$sec;
//}
$rs = $curso->validar_carga_lectiva($_SESSION['g'], $_SESSION['s']);
$fecha=  date("Y").'PRG';
$fecha2= (date("Y")-1).'PRG';
$resultado="";
$rsFecha=$matricula->buscarPorFecha1($fecha);
$cargal=$matricula->buscarPorFecha2($fecha2);           
foreach ($rsFecha as $v) {
    $resultado=$v['apelli_docente'];
}
if($resultado!=""){
}  else {
   foreach ($cargal as $x) {
      $curso->insert_carga_lectiva($x['codigo_docente'], $x['codigo_curso'], $x['codigo_aula'], ($x['fecha__cargaLect']+1).'PRG');  
    }  
}
?>
<style>
  table tr td{
        padding: 10px;
    }   
</style>

<table class="table">
    <tr>
        <th class="z">GRADO</th>
        <th class="z">SECCIÓN</th>
        <th class="z">AÑO</th>
        <th class="z">APELLIDOS</th>
        <th class="z">NOMBRES</th>
        <th class="z">Curso</th>
        <th class="colorhead">Delete</th>
        <th class="colorhead">Editar</th>
    </tr>
    <?php
  
    while ($r = mysqli_fetch_array($rs)) {
        echo '<tr><td>'.$r['grado___aula'].'</td><td>'.$r['seccio__aula'].'</td><td>'.$r['fecha__cargalect'].'</td>'
    . '<td>'.$r['apelli_docente'].'</td><td>'.$r['nombre__docente'].'<td>'.$r['nombre__curso'].'</td><td><a href="proc.php?p=d'.$r['codigo_docente'].'"><img src="../img/delete-32.png"></a></td><td><a href="proc.php?p=u'.$r['codigo_curso'].''.$r['codigo_docente'].' "><img src="../img/acept.png"></a></td></tr>';
   
}
    
    ?>
</table>