@include('admin.template.main')
<title>@yield('title','Listar Empleados')</title>



  <body>
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3><p>Informacion del Empleado: <h2>{{$empleado->nombre}}  {{$empleado->apellido}}  |  Reparticion: {{$empleado->distribution->nombre}}</h2></p></h3></div>
      <div class="panel-body">
        <h3><p>Informacion del Contrato</p></h3>
      </div>

      <!-- Table -->
      <table class="table table-bordered table-condensed table-striped table-responsive table-hover">
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
