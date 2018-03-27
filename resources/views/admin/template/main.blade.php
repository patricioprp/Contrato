<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'MDP')|Panel de Administracion</title> <!--Paso el titulo de la pagina por parametros a traves de los yield , default es un valor del titulo que se muestra por defecto cuando no se pasa un valor concreto-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
  </head>
  <body>
<!-- llama a la seccion nav para mostrar el contenido -->
<!--Autor : Patricio R. Polito
    Correo Electronico: patricioprp06@gmail.com
    Celular: 381-154986358 -->
@if (empty( Auth::user()->name ))
  <section>
    <div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>@yield('title', 'Usted no esta Logueado')</strong>
        </div>
        <div class="panel-body">

<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"> USTED NO ESTA LOGUEADO</span></div>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="btn btn-primary"><b>Iniciar Sesion</b></a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                       </form>

  </div>
</div>

<div class="panel-footer text-center"><a href="{{asset('/')}}"><img src="{{asset('images/marca_tucuman.png')}}" srcset="{{asset('images/marca_tucuman.png')}} 2x" width="60"></a> Ministerio de Desarrollo Productivo © {{date("Y")}} | Todos los derechos reservados </div>
</div>
  </section>

@elseif (Auth::user()->type=='admin')
  @include('admin.template.partials.nav')
  <section>
    <div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>@yield('title', 'MDP')</strong>
        </div>
        <div class="panel-body">
  @include('flash::message')<!--para que se muestren los mensajes con el paquete flash -->
  @include('admin.template.partials.errors')
    @yield('content')
  </div>
</div>

<div class="panel-footer text-center"><a href="{{asset('/')}}"><img src="{{asset('images/marca_tucuman.png')}}" srcset="{{asset('images/marca_tucuman.png')}} 2x" width="60"></a> Ministerio de Desarrollo Productivo © {{date("Y")}} | Todos los derechos reservados </div>
</div>
  </section>
@else
  <section>
    <div class="container-fluid">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>@yield('title', 'Usted no esta Logueado')</strong>
        </div>
        <div class="panel-body">
          <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign">
  <b>{{Auth::user()->name}} </b> Usted es usuario<b> {{Auth::user()->type}} </b>
    y no tiene privilegios para ver este contenido.</span></div>
  <h3><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="btn btn-primary">Cerrar Sesion</a></h3>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>

             </div>
           </div>

           <div class="panel-footer text-center"><a href="{{asset('/')}}"><img src="{{asset('images/marca_tucuman.png')}}" srcset="{{asset('images/marca_tucuman.png')}} 2x" width="60"></a> Ministerio de Desarrollo Productivo © {{date("Y")}} | Todos los derechos reservados </div>
           </div>
             </section>
@endif


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
 @yield('js')
  </body>
</html>
