<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'MDP')|Panel de Administracion</title> <!--Paso el titulo de la pagina por parametros a traves de los yield , default es un valor del titulo que se muestra por defecto cuando no se pasa un valor concreto-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
  </head>
  <body>
<!-- llama a la seccion nav para mostrar el contenido -->
@if (empty( Auth::user()->name ))
  <h3>Usted no esta Logueado</h3>
  <h3><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Iniciar Sesion</a></h3>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>
@elseif (Auth::user()->type=='admin')
  @include('admin.template.partials.nav')
  <section>
    <div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>@yield('title', 'MDP')</strong>
        </div>
        <div class="panel-body">
  @include('flash::message')<!--para que se muestren los mensajes con el paquete flash -->
  @include('admin.template.partials.errors')
    @yield('content')
  </div>
</div>

<div class="panel-footer">Ministerio de Desarrollo Productivo © {{date("Y")}} | Todos los derechos reservados </div>
</div>
  </section>
@else <h3> <b>{{Auth::user()->name}} </b> Usted es usuario del tipo <b> {{Auth::user()->type}} </b> y no tiene privilegios para ver este contenido...</h3>
  <h3><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Cerrar Sesion</a></h3>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>
@endif


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
 @yield('js')
  </body>
</html>
