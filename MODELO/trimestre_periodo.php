<?php

/**
 * Description of trimestre_periodo
 *
 * @author EDS7
 */
class trimestre_periodo {

    //put your code here

    public function registrar_perido_clases($txt_codigo_periodo, $txt_nombre_periodo, $txt_inicio_periodo, $txt_fin_periodo) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "INSERT INTO tb_periodo_clases VALUES('" . $txt_codigo_periodo . "','" . $txt_nombre_periodo . "','" . $txt_inicio_periodo . "','" . $txt_fin_periodo . "')";
        mysqli_query($conx, $sql);
    }

    public function mostrar_perido_clase($anio) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "SELECT * FROM tb_periodo_clases t where codigo_periodo='" . $anio . "' ";
        $resul = mysqli_query($conx, $sql);
        return $resul;
    }

    public function registrar_trimestre($txt_codigo_trimestre, $txt_inicio_trimestre, $txt_fin_trimestre, $perido_c) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "insert into tb_trimestre values('" . $txt_codigo_trimestre . "','" . $txt_inicio_trimestre . "','" . $txt_fin_trimestre . "','" . $perido_c . "')";
//        $sql = "INSERT INTO tb_trimestre VALUES('".$txt_codigo_trimestre."','".$txt_inicio_trimestre."','".$txt_fin_trimestre.",'".$perido_c."')";
        mysqli_query($conx, $stm);
    }

    public function listas_codigos($grado, $secc, $curso) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "select * from v_val_tareas_notas_asis where nombre__curso='" . $curso . "' and seccio__aula='" . $secc . "' and grado___aula='" . $grado . "'";
        $res = mysqli_query($conx, $sql);
        return $res;
    }
    public function listas_codigos_($grado, $secc, $nomb_doce) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "select * from v_val_tareas_notas_asis where n='" . $nomb_doce . "' and seccio__aula='" . $secc . "' and grado___aula='" . $grado . "'";
        $res = mysqli_query($conx, $sql);
        return $res;
    }

    public function alumnos_asig_notas($cod_curso, $grado, $seccion) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "select * from v_asg_notas where codigo_curso='" . $cod_curso . "' and fecha__cargaLect='".  date("Y")."PRG' and grado___aula='" . $grado . "' and seccio__aula='" . $seccion . "'";
        $res = mysqli_query($conx, $sql);
        return $res;
    }

    public function result_trimestre() {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "SELECT * FROM tb_trimestre t order by 1 desc limit 1";
        $res = mysqli_query($conx, $sql);

        return $res;
    }

    public function registrar_alumnos_t($cb, $cc, $ca) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "insert into tb_resumen_trimestre values(0,0,0,0,0,0,0,'" . $cb . "','" . $cc . "','" . $ca . "')";
        mysqli_query($conx, $stm);
    }

    public function registrar_notas($nt, $p1, $p2, $p3, $pa, $pg, $cb, $cc, $ca) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "CALL sp_notas_update('" . $nt . "','" . $p1 . "','" . $p2 . "','" . $p3 . "','" . $pa . "','" . $pg . "','" . $cb . "','" . $cc . "','" . $ca . "')";
        mysqli_query($conx, $stm);
    }

    public function listar_curso($grado, $secc) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $sql = "SELECT c.CODIGO_CURSO FROM TB_CURSO C 
        JOIN TB_CARGA_LECTIVA CL ON C.CODIGO_CURSO= CL.CODIGO_CURSO
    JOIN TB_AULA A ON A.CODIGO_AULA = CL.CODIGO_AULA WHERE A.GRADO___AULA='" . $grado . "' AND A.SECCIO__AULA='" . $secc . "'and fecha__cargaLect='".  date("Y")."PRG'";
        $res = mysqli_query($conx, $sql);
        return $res;
    }

    public function eliminar_carga($codigo, $fecha) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "DELETE FROM tb_carga_lectiva WHERE  codigo_docente='" . $codigo . "' and fecha__cargaLect='" . $fecha . "'";
        mysqli_query($conx, $stm);
    }

    public function update_carga($codigo, $fecha) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "SELECT * FROM v_validar_carga_lectiva where fecha__cargalect='" . $fecha . "' and codigo_docente='" . $codigo . "'";
        $resul = mysqli_query($conx, $stm);
        return $resul;
    }
    public function update_carga_p($codigo, $fecha,$g,$s) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "SELECT * FROM v_validar_carga_lectiva where fecha__cargalect='" . $fecha . "' and grado___aula='".$g."'and seccio__aula='".$s."'and codigo_docente='" . $codigo . "'";
        $resul = mysqli_query($conx, $stm);
        return $resul;
    }

    public function update_carga_($codAul, $codnc, $codigo, $fecha,$cc) {
        $con = new conexion();
        $conx = $con->abrirConextion();
        $stm = "UPDATE tb_carga_lectiva t SET codigo_docente='" . $codnc . "' , codigo_aula='" . $codAul . "'
        where codigo_docente='" . $codigo . "' and fecha__cargaLect='" . $fecha . "' and codigo_curso='".$cc."'";
        mysqli_query($conx, $stm);
    }

}
