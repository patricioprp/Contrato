@extends('admin.template.main')
@section('title','Listado de Programas')
@section('content')
@section('programa','active')
<h3><b>Modulo de Gestion de Programa</b></h3>
  <a href="{{ asset('admin/programa/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
  <table class="table table-condensed table-bordered table-bordered table-responsive">
    <thead>
      <th>#</th>
      <th>NOMBRE</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($programas as $prog)
         <tr>
           <td>{{$prog->id}}</td>
           <td>{{$prog->nombre}}</td>
           <td><a href="{{route('admin.programa.destroy',$prog->id)}}" onclick="return confirm('Desea eliminar a {{$prog->nombre}}')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              <a href="{{route('programa.edit',$prog->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $programas->render() !!}
@endsection
