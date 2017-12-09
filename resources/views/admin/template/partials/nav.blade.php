<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="@yield('empleado')"><a href="{{ asset('admin/empleado')}}">Gestionar Contratista</a></li>
        <li class="@yield('contrato')"><a href="{{ asset('admin/contrato')}}">Gestionar Contratos</a></li>
        <li class="@yield('reparticion')"><a href="{{ asset('admin/distribution')}}">Gestionar Reparticiones</a></li>
        <li class="@yield('usuario')"><a href="{{ asset('admin/user')}}">Gestion de Usuarios</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filtrar por... <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Monto total por Programa</a></li>
            <li><a href="#">Monto total por programa y fecha</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Listar contrato de Obra por empleado</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
