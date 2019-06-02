<?php /**
 *
 */
class Paciente {

  private $id;
  private $cedula;

  function __construct($cedula,$id)  {
    $this->id = $id;
    $this->cedula = $cedula;
  }

  public function getId()  {
    return $this->id;
  }

  public function getNombre()  {
    return $this->nombre;
  }
}
 ?>
