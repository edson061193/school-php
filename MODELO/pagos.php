<?php
class pagos{
	public function regi_modificar_del($val,$cod,$txtNombrePago,$txtValor,$txtCaracteristicas,$cboTipo){
		$con = new conexion();
		$conx=$con->abrirConextion();
		$sql="";
		if($val==="registrar"){
			$sql="insert  tb_carac_pago values(null,'".$txtNombrePago."','".$txtValor."','".$txtCaracteristicas."','".$cboTipo."',now())";
		}
		else{
			if($val==="update"){
			$sql="update tb_carac_pago t set   nombrepago='".$txtNombrePago."', monto_cpago='".$txtValor."',
			 caracteristica_cpago='".$txtCaracteristicas."', tipo='".$cboTipo."' where codigopagocarct='".$cod."'";
		}
		else{
			if($val==="delete"){
			$sql="delete from tb_carac_pago where codigopagocarct='".$cod."'";
		}
	}
		}
		mysqli_query($conx,$sql);
	}


public function listarPagos(){
		$con = new conexion();
		$conx=$con->abrirConextion();
		$fecha=date("Y");
		$sql="select * from tb_carac_pago where year(fecha)='".$fecha."' order by 1 desc";
		$rs=mysqli_query($conx,$sql);
		return $rs;

}
}
?>