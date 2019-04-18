<?php 

/**
* 
*/
class aula 
{
	
	public function verifiaAulaClases($grado , $seccion){
		$con = new conexion();
		 $conx = $con->abrirConextion();
        $sql = "select * from tb_aula WHERE grado___aula='".$grado."' AND SECCiO__AULA='".$seccion."'";
     $rs=   mysqli_query($conx, $sql);
     return $rs;
	}
	public function ocupadoAulaClases($codigoAula,$fecha){
		$con = new conexion();
		 $conx = $con->abrirConextion();
		$sql="select count(codigo_aula)ocupados from tb_salon_clases 
				where year(fecha_periodo)='".$fecha."'and codigo_aula='".$codigoAula."'";
 		$rs=   mysqli_query($conx, $sql);
     	return $rs;
	}

	public function listarSalonClass(){
		$con = new conexion();
		 $conx = $con->abrirConextion();
		$sql="select * from tb_aula t where actividad='1' order by 7,3,4 desc";
 		$rs=   mysqli_query($conx, $sql);
     	return $rs;
	}

	public function regi_modificar_del_sclases($val,$txtCodigoA,$txtUbig,$txtGrado,$txtSecc,$txtCapac,$cboEstado,$cboNivel){
		$con = new conexion();
		$conx=$con->abrirConextion();
		$sql="";
		if($val==="registrar"){
			$sql="CALL sp_aula_insert('".$txtUbig."','".$txtGrado."','".$txtSecc."','".$txtCapac."','".$cboEstado."','".$cboNivel."')";
		}
		else{
			if($val==="update"){
			$sql="update tb_aula t set  ubigeo__aula='".$txtUbig."' ,capaci__aula='".$txtCapac."' ,grado___aula='".$txtGrado."' ,  seccio__aula ='".$txtSecc."', estado__aula='".$cboEstado."' where  codigo_aula='".$txtCodigoA."'";
		}
		else{
			if($val==="delete"){
			$sql="update tb_aula t set  actividad='0' where codigo_aula='".$txtCodigoA."'";
		}
	}
		}
		mysqli_query($conx,$sql);
	}
}
?>