<?php
/**
 * Description of matricula
 *
 * @author Edson J Suárez L
 */
class matricula {

    //put your code here
    public function registro_matricula_sc($aula, $alum) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "INSERT INTO tb_salon_clases VALUES(null,now(),'" . $aula . "','" . $alum . "')";
        mysqli_query($con, $sql);
    }

    public function buscarPorFecha1($fecha) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM v_validar_carga_lectiva where  fecha__cargalect='" . $fecha . "'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }

    public function buscarPorFecha2($fecha) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from tb_carga_lectiva where fecha__cargaLect='" . $fecha . "'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }

    public function select_grado_Seccion($grado, $seccion) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from tb_aula where grado___aula='" . $grado . "' and seccio__aula='" . $seccion . "' and estado__aula='HABILITADA'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }

    public function listar_matricula($grado, $seccion) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM v_lista_matriculados v where grado='" . $grado . "' and seccion='" . $seccion . "'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }

    public function validar_matricula_antes($codigo, $anio) {
//        $val;
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from v_val_matricula where codigo_alumno='" . $codigo . "' and fecha__matricula like '%" . $anio . "%'";

        $val = mysqli_query($con, $sql);

        return $val;
    }
    public function valida_matricula($codigo) {
//       
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_matricula t    where codigo_alumno='".$codigo."' and fecha__matricula like '%". date("Y")."%'  ";
        $val = mysqli_query($con, $sql);
        return $val;
    }

}
