<?php

class db{

  private $host="localhost";
  private $user="root";
  private $pass="admin";
  private $db="myapp";

  private $conexion;
  private $error=false;

  function __construct(){
    $this->conexion=new mysqli($this->host, $this->user, $this->pass, $this->db);
    if ($this->conexion->connect_errno) {$this->error=true;}
  }

  public function estadoConexion(){
    if ($this->error) {
      return "error de conexion";
    } else {
      return "Conexion correcta";
    }
  }

  public function hacerConsulta($sql){
    if ($this->error==false) {
      $resultado=$this->conexion->query($sql);
      return $resultado;
    }else{
      return null;
    }
  }

  public function generaPass($pass){
    $passcifrado=password_hash($pass, PASSWORD_DEFAULT);
    return $passcifrado;
  }


}
?>
