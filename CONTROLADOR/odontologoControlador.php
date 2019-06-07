<?php
 class OdontologoControlador extends Controlador {
   function __construct()  {
     parent::__construct();
   }

    public function mostrarHistorial()    {
        $cita = $_GET['cita'];
        $this->getCtrVista()->historias = $this->getCtrModel()->historiaPaciente($cita);
        $this->getCtrVista()->renderD("odontologo","atenderPaciente");
        //header("Location:  http://127.0.0.1/clinicaOdonto/VISTAS/atender");
    }
}


?>
