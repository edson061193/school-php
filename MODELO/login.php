<?php

/**
 * Description of login
 *
 * @author Edson J Suárez L
 */
class login {

    public function validar_acceso_docente($usuario, $clave) {
        $con = new conexion();
        $conexion = $con->abrirConextion();
        $stmt = "SELECT * FROM tb_docente t where usuari__docente='".$usuario."' and  clave__docente='".  MD5($clave)."'";
//        $stmt = "SELECT * FROM tb_docente t where usuari__docente='" . $usuario . "' and clave__docente= md5('" . $clave . "')";
        $resul = mysqli_query($conexion, $stmt);
        return $resul;
    }

    public function login_alumno($usuario, $pass) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_alumno  where  iduser__alumno='" . $usuario . "' and claveu_alumno='".  MD5($pass)."' ";
        $query = mysqli_query($con, $sql);
        return $query;
    }

}
