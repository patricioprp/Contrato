@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')
{!! Form::open(['route' => 'user.store','method'=>'POST']) !!}

<div class="form-group">

  {!! Form::label('name','NOMBRE') !!}
  {!! Form::text('name',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
  {!! Form::label('email','CORREO ELECTRONICO') !!}
  {!! Form::email('email',null,['class' => 'form-control', 'placeholder'=>'ejemplo@mail.com','required']) !!}
  {!! Form::label('password','CONTRASEÑA') !!}
  {!! Form::password('password',['class' => 'form-control', 'placeholder'=>'****************','required']) !!}
  {!! Form::label('type','TIPO') !!}
  {!! Form::select('type',['' => 'Seleccione un Rol', 'member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
