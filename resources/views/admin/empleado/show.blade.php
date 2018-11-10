@extends('admin.template.main')
@section('title','Ver Contratos')
@section('content')
@section('empleado','active')
  <body>
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><h3><p>Informacion del Consultor: <h2>{{$empleado->nombre}}  {{$empleado->apellido}}  |  Reparticion:{{$empleado->distribution->nombre}} | Programa: {{$empleado->programa->nombre}} </h2></p></h3></div>
      <div class="panel-body">
        <h3><p>Informacion del Contrato</p></h3>
      </div>
<div class="col-xs-12">
<div class="table-responsive">
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

          @foreach ($empleado->contratos as $cont)
          <tr>  <td>{{$cont->id}}</td>
            <td>{{$cont->fondos_origen}}</td>
            <td>{{$cont->indicador}}</td>
            <td>{{$cont->monto}}</td>
            <td>{{$cont->duracion}}</td>
            @if ($cont->estado == "activo")
               <td><span class="label label-success">{{$cont->estado}}</td></span>
            @elseif ($cont->estado == "proximo")
               <td><span class="label label-warning">{{$cont->estado}}</td></sapn>
            @else
              <td><span class="label label-danger">{{$cont->estado}}</td></span>
            @endif
            <td>{{$cont->tipo}}</td>
            <td>{{$cont->actividad}}</td>
            <td>{{\Carbon\Carbon::parse($cont->desde)->format('d-m-Y')}}</td>
            <td>{{\Carbon\Carbon::parse($cont->hasta)->format('d-m-Y')}}</td> </tr>
          @endforeach

      </table>
    </div>
    </div>
@endsection
