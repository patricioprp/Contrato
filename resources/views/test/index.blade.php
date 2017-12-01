
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3><p>Informacion del Empleado: <h2>{{$empleado->nombre}}  {{$empleado->apellido}}  |  Reparticion: {{$empleado->distribution->nombre}}</h2></p></h3></div>
      <div class="panel-body">
        <h3><p>Informacion del Contrato</p></h3>
      </div>

      <!-- Table -->
      <table class="table">
        <tr>
          <td>#</td>
          <td>Fondo de Origen</td>
          <td>Indicador(dias restante)</td>
          <td>Monto Total($)</td>
          <td>Duracion</td>
          <td>Estado</td>
          <td>Tipo</td>
          <td>Actividad</td>
          <td>Desde</td>
          <td>Hasta</td>
        </tr>
        <tr>
          @foreach ($empleado->contratos as $cont)
            <td>{{$cont->id}}</td>
            <td>{{$cont->fondos_origen}}</td>
            <td>{{$cont->indicador}}</td>
            <td>{{$cont->monto}}</td>
            <td>{{$cont->duracion}}</td>
            <td>{{$cont->estado}}</td>
            <td>{{$cont->tipo}}</td>
            <td>{{$cont->actividad}}</td>
            <td>{{$cont->desde}}</td>
            <td>{{$cont->hasta}}</td>
          @endforeach
        </tr>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
