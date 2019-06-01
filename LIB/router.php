<?php /**
 *
 */
class Router {

  private $sesion;
  function __construct() {
    $this->validarSesion();
  }

  private function validarSesion(){
    if ( !isset( $_SESSION['USER'] ) ) {
      $this->sesionOff();
    }else{
      $this->sesionOn();
    }
  }

  private function sesionOff(){
    $url = isset($_GET['url']) ? $_GET['url']: null;
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $archivo = "CONTROLADOR/".$url[0]."Controlador.php";
    if ( file_exists($archivo) ) {
      require_once $archivo;
      $nom = $url[0]."Controlador";
      $ctr = new $nom;
      $ctr->CrearModelo($url[0]);
      $ctr->CrearVista();
    }else {
      require_once "CONTROLADOR/errorControlador.php";
      $nom = "erroresControlador";
      $ctr = new $nom;
      $ctr->mensaje("MLP BRUTO");
    }
  }

  private function sesionOn(){

  }
}
 ?>
