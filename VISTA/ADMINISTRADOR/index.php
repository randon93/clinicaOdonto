<div class="row">
  <div class="col-md-4">
    <div class="list-group">
      <h3 class="list-group-item">Nombre del paciente</h3>
      <h3 class="list-group-item">telefono del paciente</h3>
      <h3 class="list-group-item">Correo del paciente</h3>
    </div>
  </div>
  <div class="col-md-8">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class='fas fa-address-book'>Clientes</i>
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class='fas fa-clipboard'>Listar Clientes</i></a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Regitrar Cliente</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Eliminar Cliente</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <select class="form-control form-control-sm" name="clientes[]">
          <option value="">cliente 1</option>
          <option value="">cliente 2</option>
          <option value="">cliente 3</option>
        </select>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        <form class="inicio_form" action="index.html" method="post">
          <label for="">Cedula: </label>
          <input type="text" name="cedula" Required><br>
          <label for="">Nombre: </label>
          <input type="text" name="nombre" required><br>
          <label for="">Correo: </label>
          <input type="text" name="correo" required><br>
          <label for="">Telefono: </label>
          <input type="text" name="telefono" required><br>
          <button type="button" name="registrar">Registrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Listar Citas
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
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
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Collapsible Group Item #3
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
