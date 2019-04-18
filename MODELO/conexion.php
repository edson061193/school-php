<?php
/**
 * Description of conexion
 *
 * @author Edson J Suárez L
 */
class conexion {
//     public function abrirConextion() {
//        $host = "http://edsonsuarez.pe.hu";
//        $user = " u860822456_edson";
//        $database = "u860822456_prg";
//        $password = "pedroruizgallo";
//        $conexion = mysqli_connect($host, $user, $password, $database);
//             
//        return $conexion;
//    }
     public function abrirConextion() {
        $host = "localhost";
        $user = "root";
        $database = "pedro_ruiz_gallo";
        $password = "";
        $conexion = mysqli_connect($host, $user, $password, $database);
             
        return $conexion;
    }
}
