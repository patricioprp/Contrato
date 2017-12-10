@extends('admin.template.main')
@section('title','Editar Usuario')
@section('content')
<h2>Editar Usuario {{$user->name}}</h2>
@section('usuario','active')
{!! Form::open(['route' => ['user.update',$user],'method'=>'PUT']) !!}

<div class="form-group">

  {!! Form::label('name','NOMBRE') !!}
  {!! Form::text('name',$user->name,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
  {!! Form::label('email','CORREO ELECTRONICO') !!}
  {!! Form::email('email',$user->email,['class' => 'form-control', 'placeholder'=>'ejemplo@mail.com','required']) !!}
  {!! Form::label('password','CONTRASEÑA') !!}
  {!! Form::password('password',['class' => 'form-control', 'placeholder'=>'****************','required']) !!}
  {!! Form::label('type','TIPO') !!}
  {!! Form::select('type',['' => 'Seleccione un Rol', 'member'=>'Miembro','admin'=>'Administrador'],$user->type,['class'=>'form-control']) !!}
<br>
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
