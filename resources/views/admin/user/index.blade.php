@extends('admin.template.main')
@section('title','Lista de Usuarios')
@section('content')
@section('usuario','active')
<h3><b>Modulo de Gestion de Usuario</b></h3>
<a href="{{ asset('admin/user/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
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
           <td><a href="{{route('admin.user.destroy',$user->id)}}" onclick="return confirm('Desea eliminar a {{$user->name}}')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
               <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
{!! $users->render() !!}
@endsection
