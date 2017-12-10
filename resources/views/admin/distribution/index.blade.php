@extends('admin.template.main')
@section('title','Listado de Reparticiones')
@section('content')
@section('reparticion','active')
  <a href="{{ asset('admin/distribution/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
  <table class="table table-condensed table-bordered table-bordered table-responsive">
    <thead>
      <th>#</th>
      <th>NOMBRE</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($reparticiones as $rep)
         <tr>
           <td>{{$rep->id}}</td>
           <td>{{$rep->nombre}}</td>
           <td><a href="{{route('admin.distribution.destroy',$rep->id)}}" onclick="return confirm('Desea eliminar a {{$rep->nombre}}')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              <a href="{{route('distribution.edit',$rep->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $reparticiones->render() !!}
@endsection
