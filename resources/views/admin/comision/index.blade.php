@extends('admin.template.main')
@section('title','Listado de Comisiones')
@section('content')
@section('contrato','active')
<h3><b>Modulo de Gestion de Comisiones</b></h3>
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
        @foreach ($comisiones as $comision)
           <tr>
             <td>{{$comision->desde}}</td>
             <td>{{$comision->hasta}}</td>
             <td>{{$comision->observaciones}}</td>
             <td><a href="{{route('admin.comision.destroy',$comision->id)}}"onclick="return confirm('Desea eliminar la Comision?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                 <a href="{{route('comision.edit',$comision->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
          </tr>
        @endforeach

      </tbody>
    </table>
 </div>
 </div>
{!! $comisiones->render() !!}
@endsection
