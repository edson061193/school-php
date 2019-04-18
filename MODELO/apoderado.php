<?php

/**
 * Description of apoderado
 *
 * @author EDS7
 */
class apoderado {

    public function registrar_apoderado($dni,$ape,$nomb,$direc,$telef,$sex,$cDni,$cRec,$cPag,$email) {
        $con = new conexion();
        $conex = $con->abrirConextion();
        $sql = "INSERT INTO tb_apoderado VALUES('".$dni."','".$dni."','".$ape."','".$nomb."','".$direc."','".$telef."','".$sex."','0','".$cDni."','".$cRec."','".$cPag."','".$email."')";
        mysqli_query($conex, $sql);
    }

}
