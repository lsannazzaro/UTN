

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mercado Birra</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/TipoCerveza/Login">Cervezas</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="/TipoEnvase/gestionEnvases">Envases</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

      <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
                <div class="modal-body">
                  <form method="POST" action="<?=FRONT?>GestionClientes/Nuevo" class="form-signin">
                    <div class="form-group">
                      <label for="Nombre">Nombre:</label>
                      <input type="text" id="inputNombreCte" class="form-control form-format" placeholder="Nombre" name="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="Domicilio">Domicilio:</label>
                      <input type="text" id="inputDomicilio" class="form-control form-format" placeholder="Domicilio" name="Domicilio" required>
                    </div>
                    <div class="form-group">
                      <label for="Telefono">Telefono:</label>
                      <input type="text" id="inputTelefono" class="form-control form-format" placeholder="Telefono" name="Telefono" required>
                    </div>
                     <div class="form-group">
                      <label for="Email">Email:</label>
                      <input type="text" id="inputEmail" class="form-control form-format" placeholder="Email" name="Email" required>
                    </div>
                  <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Aceptar">
                   Aceptar
                </button>
                  </form>
                </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
            </div>
          </div>
        </div>
    </ul>
  </div>
</nav>

