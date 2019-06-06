<?php

class administradorControlador extends Controlador{

  function __construct(){
    parent::__construct();
    echo "<h3>Hola Controlador de administrador</h3>";
  }

  public function eliminar()  {
    $paciente = $_GET['paciente'];
    $this->getCtrModel()->eliminar($paciente);
    echo "<script>alert('PACIENTE ELIMINADO ');</script>";
  }

  public function resgistrarPaciente()  {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $this->getCtrModel()->resgistrarPaciente($cedula, $nombre, $correo, $telefono, $password);
  }

}

 ?>
