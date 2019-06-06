<?php /**
 *
 */
class Vista {

  function __construct()  {
   // echo "<h1>VISTA PADRE</h1>";
  }

  public function render($vista) {//echo "<h1>entre</h1>";
    define('VISTA', $vista);
    require_once "VISTA/plantilla.php";
  }
}
 ?>
