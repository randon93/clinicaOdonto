<?php /**
 *
 */
class InicioModel extends Modelo{

  function __construct()  {
    parent::__construct();
    echo "<h3>Inicio modelo</h3>";
  }

  public function saludo()
  {
    echo "hola oscarcito";
  }
}
 ?>
