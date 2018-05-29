<?php

include 'db.php';

class usuario extends db{

  function __construct(){
    parent::__construct();
  }

  public function devuelveUsuario($user){
    if ($this->error==false) {
      $sql="SELECT * FROM user WHERE username='" .$user. "'";
      $resultado=$this->hacerConsulta($sql);
      if ($resultado!=null) {
        $tabla=[];
        while ($fila=$resultado->fetch_assoc()) {
          $tabla[]=$fila;
        }
        return $tabla;
    } else {
      return null;
    }
  }
}

}
?>
