<?php

class docente {
   public function datos_docente($codigo){
       $conexion= new conexion();
       $con=$conexion->abrirConextion();
       $sql="SELECT * FROM tb_docente t where codigo_docente='".$codigo."'";
       $query=  mysqli_query($con, $sql);
       return $query;
   }
   public function lista_docente(){
       $conexion= new conexion();
       $con=$conexion->abrirConextion();
       $sql="SELECT  *, concat_ws(',',apelli_docente,nombre__docente) as n FROM tb_docente t ";
       $query=  mysqli_query($con, $sql);
       return $query;
   }
     public function lista_docente_act($codigo){
       $conexion= new conexion();
       $con=$conexion->abrirConextion();
       $sql="SELECT * FROM v_lista_docente where codigo='".$codigo."' group by 2";
       $query=  mysqli_query($con, $sql);
       return $query;
   }
     public function lista_docente_act_g($codigo){
       $conexion= new conexion();
       $con=$conexion->abrirConextion();
       $sql="SELECT * FROM v_lista_docente where codigo='".$codigo."' group by 4";
       $query=  mysqli_query($con, $sql);
       return $query;
   }
   public function busca_docente($apellido,$nombre,$dni){
     $conexion= new conexion();
      $con=$conexion->abrirConextion();
      $sql="SELECT * FROM tb_docente t where apelli_docente='".$apellido."' or nombre__docente='".$nombre."' or dni__docente='".$dni."'";
       $query=  mysqli_query($con, $sql);
       return $query;
       
   }
 public function insertar_docente($codigo, $dni, $apelli, $nomb, $dir, $cel, $ema, $sexo, $fechai, $foto,$tipo,$hr){
      $conexion= new conexion();
      $con=$conexion->abrirConextion();
      $sql="INSERT INTO tb_docente VALUES('".$codigo."','".$dni."','".$apelli."','".$nomb."','".$dir."','".$cel."','".$ema."','".$sexo."','".$codigo."',MD5('".$codigo."'),'".$fechai."','".$foto."$tipo','','$hr')";
      mysqli_query($con, $sql);
      
 }
}
