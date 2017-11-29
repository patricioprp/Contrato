!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Listar Empleados')</title>
  </head>
  <body>
    <h2>{{$empleado->id}}</h2>
    <h3>{{$empleado->dni}}</h3>
    <h2>{{$empleado->nombre}}  {{$empleado->apellido}}</h2>
    <h2>{{$empleado->programa}}</h2>
    <h2>{{$empleado->distribution->nombre}}</h2>

    {{$empleado->contratos}}
  </body>
</html>
