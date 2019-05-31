<?php /**
 *
 */
class Errores extends Controlador{

  function __construct()  {
    parent::__construct();
    echo "ERROR 404, PAGINA NO ENCONTRADA";
    // echo $this->msj ;
  }

  public function mensaje($msj)  {
    echo "<h1>$msj</h1>";
  }
}
 ?>
