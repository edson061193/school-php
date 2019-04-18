<!--<link href="../css/general_style.css" rel="stylesheet" type="text/css">-->
      <?php
      require_once '../MODELO/matricula.php';

      require_once '../MODELO/conexion.php';
      $matr = new matricula();
      $grado_seccion = $_POST['txtgradoSecc'];
      $grado = substr($grado_seccion, 0, 1);
      $sec = substr($grado_seccion, 1, 2);

      $rs = $matr->listar_matricula($grado, $sec);
      ?>
<table class="table tx">
    <tr>
        <th class="tdcolor">CODIGO</th>
        <th class="tdcolor">DNI</th>
        <th class="tdcolor">APELLIDOS</th>
        <th class="tdcolor">NOMBRES</th>
        <th class="tdcolor">GRADO</th>
        <th class="tdcolor">SECCION</th>
        <th class="tdcolor">FECHA</th>
        <th class="tdcolor">SEXO</th>
    </tr>
    <?php
    while ($r = mysqli_fetch_array($rs)) {
        echo '<tr><td>' . $r['codigo'] . '</td><td>' . $r['dni'] . '</td><td>' . $r['apellidos'] . '</td><td>' . $r['nombres'] . '</td>'
        . '<td>' . $r['grado'] . '</td><td>' . $r['seccion'] . '</td><td>' . $r['fecha'] . '</td><td>' . $r['sexo__alumno'] . '</td></tr>';
    }
    ?>

</table>
<form action="../pdf/lista_alumnoPDFgs.php" method="POST">
    <input type="hidden" value="<?php echo $grado ?>" name="txtgrado">
    <input type="hidden" value="<?php echo $sec ?>" name="txtseccion">
    <button class="btn btnx"><img src="../img/pdf.png" style="width: 15%">IMPRIMIR<?php echo ' " ' . $grado . '/' . $sec . '"'; ?></button></th>

</form>
<style>
    .btnx{
        background-color: #BD532B;
        width: 20%;
        padding: 0px;
        margin: 0px;
    }
</style>