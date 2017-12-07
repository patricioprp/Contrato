@include('admin.template.main')
<title>@yield('title','Listar Empleados')</title>



  <body>
    <button type="button" class="btn btn-primary"><a href="{{ asset('admin/empleado/create')}}"><font color="white">Nuevo</font></a></button>
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3><p>Informacion del Contratista: <h2>{{$empleados->nombre}}  {{$empleados->apellido}}  |  Reparticion: {{$empleados->distribution->nombre}}</h2></p></h3></div>
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
          @foreach ($empleados->contratos as $cont)
            <td>{{$cont->id}}</td>
            <td>{{$cont->fondos_origen}}</td>
            <td>{{$cont->indicador}}</td>
            <td>{{$cont->monto}}</td>
            <td>{{$cont->duracion}}</td>
            @if ($cont->estado == "activo")
               <td class="success">{{$cont->estado}}</td>
            @elseif ($cont->estado == "proximo")
               <td class="warning">{{$cont->estado}}</td>
            @else
              <td class="danger">{{$cont->estado}}</td>
            @endif
            <td>{{$cont->tipo}}</td>
            <td>{{$cont->actividad}}</td>
            <td>{{$cont->desde}}</td>
            <td>{{$cont->hasta}}</td>
          @endforeach
        </tr>
      </table>
      {!! $empleados->render() !!}
    </div>
