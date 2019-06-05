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

}

 ?>
