@extends('admin.template.main')
@section('title','Lista de Usuarios')
@section('content')
<button type="button" class="btn btn-primary"><a href="{{ asset('admin/user/create')}}"><font color="white">Nuevo</font></a></button>
  <table class="table table-bordered table-condensed table-striped table-responsive table-hover">
    <thead>
      <th>#</th>
      <th>NOMBRE</th>
      <th>CORREO ELECTRONICO</th>
      <th>TIPO</th>
      <th>ACCION</th>
    </thead>
    <tbody>
      @foreach ($users as $user)
         <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>

           @if ($user->type == "member")
              <td class="success">{{$user->type}}</td>
           @else
             <td class="danger">{{$user->type}}</td>
           @endif
           <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $users->render() !!}
@endsection
