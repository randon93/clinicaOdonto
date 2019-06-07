<!DOCTYPE html>
<html lang="en">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <!-- <h2>Info del <?php echo $_SESSION['TIPO']; ?>: </h2>
                <h3 class="list-group-item"><?php echo $_SESSION['USER']->getNombre();?></h3>
                <h3 class="list-group-item"><?php echo $_SESSION['USER']->getTelefono();?></h3>
                <h3 class="list-group-item"><?php echo $_SESSION['USER']->getCorreo();?></h3>             -->
            </div>
        </div>
        <div class="col-md-8">
            <h1><?php echo print_r($this->historias);?></h1>
        </div>
    </div>
</html>
