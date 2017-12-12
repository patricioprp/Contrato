<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="@yield('empleado')"><a href="{{ asset('admin/empleado')}}">Gestionar Consultor</a></li>
        <li class="@yield('contrato')"><a href="{{ asset('admin/contrato')}}">Gestionar Contrato</a></li>
        <li class="@yield('reparticion')"><a href="{{ asset('admin/distribution')}}">Gestionar Reparticion</a></li>
        <li class="@yield('programa')"><a href="{{ asset('admin/programa')}}">Gestionar Programa</a></li>
        <li class="@yield('usuario')"><a href="{{ asset('admin/user')}}">Gestion de Usuario</a></li>
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

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{asset('/')}}">Pagina de Inicio</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Salir<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
