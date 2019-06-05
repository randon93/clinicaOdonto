<?php /**
 *
 */
class Persona  {

  private $cedula;
  private $nombre;
  private $correo;
  private $telefono;
  private $id;

  function __construct($cedula, $nombre, $correo, $telefono, $id)  {
      $this->cedula = $cedula;
      $this->nombre = $nombre;
      $this->correo = $correo;
      $this->telefono = $telefono;
      $this->id = $id;
  }

  public function getId()  {
    return $this->id;
  }

  public function getCedula()  {
    return $this->cedula;
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
