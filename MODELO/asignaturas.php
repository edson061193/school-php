<?php
class asignaturas{
	public function regi_modificar_del_asig($val,$txtCodigoA,$txtNombreA,$txtHteoriaA,$txtHpracA,$cboNivel,$cboGrado){
		$con = new conexion();
		$conx=$con->abrirConextion();
		$sql="";
		if($val==="registrar"){
			$sql="insert into tb_curso values('".$txtCodigoA."','".$txtNombreA."','".$txtHteoriaA."','".$txtHpracA."','".$cboGrado."','1','".$cboNivel."')";
		}
		else{
			if($val==="update"){
			$sql="update tb_curso t set  hrteor__curso = '".$txtHteoriaA."' , hrprac__curso='".$txtHpracA."' where codigo_curso='".$txtCodigoA."'";
		}
		else{
			if($val==="delete"){
			$sql="update tb_curso t set estado__curso='0'  where codigo_curso='".$txtCodigoA."'";
		}
	}
		}
		mysqli_query($conx,$sql);
	}
public function listarAsignaturas(){
		$con = new conexion();
		$conx=$con->abrirConextion();
		$sql="select * from tb_curso t where estado__curso='1' order by 7,5 desc";
		$rs= mysqli_query($conx,$sql);
		return $rs;
}

}
?>