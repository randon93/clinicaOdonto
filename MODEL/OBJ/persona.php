<?php /**
 *
 */
class Persona  {

  private $cedula;
  private $nombre;
  private $correo;
  private $telefono;

  function __construct($cedula, $nombre, $correo, $telefono)  {
      $this->cedula = $cedula;
      $this->nombre = $nombre;
      $this->correo = $correo;
      $this->telefono = $telefono;
  }

  public function getId()  {
    return $this->id;
  }

  public function getNombre()  {
    return $this->nombre;
  }

  public function getCorreo()  {
    return $this->correo;
  }

  public function getTelefono()  {
    return $this->telefono;
  }
}
 ?>
