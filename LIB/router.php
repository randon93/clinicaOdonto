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
      $ctr = new $url[0];
    }else {
      require_once "CONTROLADOR/errorControlador.php";
      $ctr = new errores();
      $ctr->mensaje("MLP BRUTO");
    }
  }

  private function sesionOn(){

  }
}
 ?>
