@extends('admin.template.main')
@section('title','Listado de Comisiones')
@section('content')
@section('contrato','active')
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3><p>Informacion del Consultor: <h2>{{$contrato->empleado->nombre}}  {{$contrato->empleado->apellido}}  |  Reparticion:{{$contrato->empleado->distribution->nombre}} | Programa: {{$contrato->empleado->programa->nombre}} </h2></p></h3></div>
    <div class="panel-body">
    </div>

<h3><b>Gestion de Comisiones</b></h3>
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-bordered table-hover">
      <thead>
        <th>DESDE</th>
        <th>HASTA</th>
        <th>OBSERVACIONES</th>
        <th>ACCION</th>
      </thead>
      <tbody>
        @foreach ($contrato->comisions as $comision)
           <tr>
             <td>{{\Carbon\Carbon::parse($comision->desde)->format('d-m-Y')}}</td>
             <td>{{\Carbon\Carbon::parse($comision->hasta)->format('d-m-Y')}}</td>
             <td>{{$comision->observaciones}}</td>
             <td><a href="{{route('admin.comision.destroy',$comision->id)}}"onclick="return confirm('Desea eliminar la Comision?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                 <a href="{{route('comision.edit',$comision->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
          </tr>
        @endforeach

      </tbody>
    </table>
 </div>
 </div>

@endsection
