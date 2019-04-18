<?php
require_once '../MODELO/matricula.php';
require_once '../MODELO/curso.php';
require_once '../MODELO/conexion.php';
$curso = new curso();
$doc = $_POST['val2'];
$rs = $curso->validar_carga_lectiva2($doc);

?>
<table class="table">
    <tr>
        <th>GRADO</th>
        <th>SECCIÓN</th>
        <th>AÑO</th>
        <th>APELLIDOS</th>
        <th>NOMBRES</th>
        <th>Curso</th>
        <th>Delete</th>
        <th>Editar</th>
    </tr>
    <?php
    while ($r = mysqli_fetch_array($rs)) {
        echo '<tr><td>'.$r['grado___aula'].'</td><td>'.$r['seccio__aula'].'</td><td>'.$r['fecha__cargalect'].'</td>'
    . '<td>'.$r['apelli_docente'].'</td><td>'.$r['nombre__docente'].'<td>'.$r['nombre__curso'].'</td><td><a   href="#"><img src="../img/delete-32.png"></a></td><td><a href="deleteCarga.php?p='.$r['codigo_docente'].'"><img src="../img/acept.png"></a></td></tr>';

    }
?>
</table>