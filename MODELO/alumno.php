<?php

/**
 * Description of alumno
 *
 * @author Edson J Suárez L
 */
class alumno {

    public function insertar_alumno($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $c, $p12) {
        $conex = new conexion();
        $con = $conex->abrirConextion();
        $sql = "INSERT INTO tb_alumno VALUES('" . $p1 . "','" . $p2 . "','" . $p3 . "','" . $p4 . "','" . $p5 . "','" . $p6 . "','" . $p7 . "','" . $p8 . "','" . $p9 . "','" . $p1 . "',MD5('".$c."'),'" . $p12 . "')";
        mysqli_query($con, $sql);
    }

    public function datos_alumnos($codigo) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_alumno t where codigo_alumno='" . $codigo . "'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }
    public function cambiar_clave($codigo,$clave) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "UPDATE tb_alumno t SET claveu_alumno= '".$clave."' where codigo_alumno='".$codigo."'";
        $resul = mysqli_query($con, $sql);
        return $resul;
    }

    public function matricula_alumno($cod_aula, $cod_alumno) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "INSERT INTO tb_salon_clases VALUES('" . $cod_aula . "','" . $cod_alumno . "')";
        mysqli_execute($sql);
    }

    public function cambiar_img($img, $codigo) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "UPDATE tb_alumno t SET foto__alumno = '" . $img . "' where codigo_alumno='" . $codigo . "'";
        mysqli_execute($sql);
    }

    public function eliminar_img($codigo) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "UPDATE tb_alumno t SET foto__alumno = '' where codigo_alumno='" . $codigo . "'";
        mysqli_execute($sql);
    }

    public function validar_pago($codigo) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM v_estado_pago v where codigo_Alumno='" . $codigo . "'";
        $query = mysqli_query($con, $sql);
        return $query;
    }

    public function lista_alumno() {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $anio=  date("Y").'%';
        $statemen = "SELECT * FROM v_alumno_matriculado v where fecha__matricula   like '".$anio."'";
        $resul = mysqli_query($con, $statemen);
        return $resul;
    }

    public function ver_info_alumno($codigo) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $statemen = "SELECT * FROM v_info_alumno v where codigo_alumno='" . $codigo . "'";
        $resul = mysqli_query($con, $statemen);
        return $resul;
    }
    
    public function listaalumno(){
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $statemen = "SELECT * FROM tb_alumno";
        $resul = mysqli_query($con, $statemen);
        return $resul;
    }

}
