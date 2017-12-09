<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Default')|Panel de Administracion</title> <!--Paso el titulo de la pagina por parametros a traves de los yield , default es un valor del titulo que se muestra por defecto cuando no se pasa un valor concreto-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  </head>
  <body>
<!-- llama a la seccion nav para mostrar el contenido -->
  @include('admin.template.partials.nav')

<section>
@include('flash::message')
  @yield('content')
</section>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
