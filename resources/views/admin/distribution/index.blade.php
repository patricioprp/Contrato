@extends('admin.template.main')
@section('title','Listado de Reparticiones')
@section('content')
<button type="button" class="btn btn-primary"><a href="{{ asset('admin/distribution/create')}}"><font color="white">Nuevo</font></a></button>
  <table class="table table-condensed table-bordered table-bordered table-responsive">
    <thead>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($reparticiones as $rep)
         <tr>
           <td>{{$rep->id}}</td>
           <td>{{$rep->nombre}}</td>
           <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $reparticiones->render() !!}
@endsection
