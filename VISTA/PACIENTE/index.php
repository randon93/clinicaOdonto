<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Agendar Cita</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Listar Cita</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <li>
            <div  class="form-group">
              <select  name="id_consultorio[]" class="form-control form-control-sm">
                <?php
                include '';
                $pdo = conexion();
                $datos = $pdo -> prepare("SELECT  FROM ");
                $datos -> execute();
                $rows = $datos -> fetchAll(\PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                    ?>
                    <option value="<?php print($row->);?>"><?php print($row->."-"); ?><?php print($row->); ?></option>

            <?php  }                ?>
          </select>
            </div>
            </li>
            <li>
              <input type="date" name="fecha">
            </li>
            <li>
              <input type="submit" value="Agendar">
            </li>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Paciente</th>
      <th scope="col">Doctor</th>
      <th scope="col">Fecha</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
