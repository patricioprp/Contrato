@extends('admin.template.main')
@section('title','Listado de Contratista')
@section('content')
<button type="button" class="btn btn-primary"><a href="{{ asset('admin/empleado/create')}}"><font color="white">Nuevo</font></a></button>
  <table class="table table-condensed table-bordered table-bordered table-responsive">
    <thead>
      <th>#</th>
      <th>DNI</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>PROGRAMA</th>
      <th>REPARTICION</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($empleados as $empleado)
         <tr>
           <td>{{$empleado->id}}</td>
           <td>{{$empleado->dni}}</td>
           <td>{{$empleado->nombre}}</td>
           <td>{{$empleado->apellido}}</td>
           <td>{{$empleado->programa}}</td>
           <td>{{$empleado->distribution->nombre}}</td>
           <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a> <a href="" class="btn btn-primary"></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $empleados->render() !!}
@endsection
