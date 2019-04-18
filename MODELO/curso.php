<?php

class curso {

    public function seleccionCurso($nombre) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_curso where nombre__curso='" . $nombre . "'";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }

    public function listaCursos() {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_curso group by nombre__curso";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }
    public function listaCursos_p() {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM tb_curso group by nombre__curso";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }
    public function insert_carga_lectiva($codDocente, $codCurso, $codAula, $fecha) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "INSERT INTO tb_carga_lectiva VALUES(0,'" . $codDocente . "','" . $codCurso . "','" . $codAula . "','" . $fecha . "')";
        mysqli_query($con, $sql);
    }
    public function validar_carga_lectiva($grado, $seccion) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "SELECT * FROM v_validar_carga_lectiva where grado___aula ='" . $grado . "' and seccio__aula='" . $seccion . "' and fecha__cargaLect='" . date("Y") . 'PRG' . "' order by fecha__cargaLect ";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }

    public function validar_carga_lectiva2($doc) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from v_validar_carga_lectiva where codigo_docente='" . $doc . "'";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }

        public function codigoDia($dia) {
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from tb_dias_semanas t where nombre_dia='".$dia."'";
        $rs = mysqli_query($con, $sql);
        return $rs;
    }

    public function listar_para_horario($v,$grado,$seccion,$docente,$curso){
         $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "";
        if($v==="horariox"){
        $sql = "select * from v_validar_carga_lectiva v where grado___aula='".$grado."' and seccio__aula='".$seccion."' and n='".$docente."' and nombre__curso='".$curso."'
        "; 

        }
        if($v==="listaDocente"){

        }
        $rs = mysqli_query($con, $sql);
        return $rs;
    }
    public function registrarHorario($ccarga,$cdia,$hi,$hf){
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "insert into tb_horario_clases values(null,'".$ccarga."','".$cdia."','".$hi."','".$hf."','".date('Y')."')";
        mysqli_query($con, $sql);
        
 }
 public function horario_por_dia_gs($grado,$seccion,$dia){
        $conexion = new conexion();
        $con = $conexion->abrirConextion();
        $sql = "select * from v_horarios v
         where grado___aula='".$grado."' and seccio__aula='".$seccion."' and nombre_dia='".$dia."' and anio='".date('Y')."'";
        $rs = mysqli_query($con, $sql);
        return $rs;

 }
}
