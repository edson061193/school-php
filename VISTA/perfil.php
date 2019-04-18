<?php
session_start();
$codigo = "";
$val="";
if (isset($_SESSION['codigo'])) {
    $codigo = $_SESSION['codigo'];
    $val=$_SESSION['val'];
} else {
    header("Location: ../cerrar_session.php");
}
require_once '../MODELO/conexion.php';
require_once '../MODELO/docente.php';

    require_once 'header_docente.php';  


?>

<?php
$docente = new docente();
$sql = $docente->datos_docente($codigo);
while ($row = mysqli_fetch_array($sql)) {
    echo $row['codigo_docente'] . "<br>";
    echo $row['dni__docente'] . "<br>";
    echo $row['apelli_docente'] . "<br>";
    echo $row['nombre__docente'] . "<br>";
    echo $row['direcc__docente'] . "<br>";
    echo $row['email__docente'] . "<br>";
    echo $row['sexo__docente'] . "<br>";
    echo $row['usuari__docente'] . "<br>";
}

