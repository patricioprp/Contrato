@extends('admin.template.main')
@section('title','Listado de Reparticiones')
@section('content')



  <table class="table">
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

@endsection
