@extends('admin.template.main')
@section('title','Listado General de Comisiones')
@section('content')
@section('contrato','active')
  <h3><b>Listado General de Comisiones</b></h3>
  <div class="col-xs-12">
  <div class="table-responsive">
      <table class="table table-condensed table-bordered table-bordered table-hover">
        <thead>
          <th>CONSULTOR</th>
          <th>DESDE</th>
          <th>HASTA</th>
          <th>OBSERVACIONES</th>
        </thead>
        <tbody>
          @foreach ($comisiones as $comision)
             <tr>
               <td>{{$comision->contrato->empleado->apellido}}, {{$comision->contrato->empleado->nombre}}</td>
               <td>{{\Carbon\Carbon::parse($comision->desde)->format('d-m-Y')}}</td>
               <td>{{\Carbon\Carbon::parse($comision->hasta)->format('d-m-Y')}}</td>
               <td>{{$comision->observaciones}}</td>
             </tr>
          @endforeach

        </tbody>
      </table>
   </div>
   </div>
  {!! $comisiones->render() !!}
  @endsection
