@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')
@section('usuario','active')


{!! Form::open(['route' => 'user.store','method'=>'POST']) !!}

<div class="form-group">
       <div class="form-group col-lg-8">
  {!! Form::label('name','NOMBRE',['class'=>'col-lg-1 control-label']) !!}
         <div class="col-lg-8">
  {!! Form::text('name',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
</div></div>
       <div class="form-group col-lg-12">
  {!! Form::label('email','CORREO ELECTRONICO',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-6">
  {!! Form::email('email',null,['class' => 'form-control', 'placeholder'=>'ejemplo@mail.com','required']) !!}
</div></div>
       <div class="form-group col-lg-12">
  {!! Form::label('password','CONTRASEÑA',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-8">
  {!! Form::password('password',['class' => 'form-control', 'placeholder'=>'****************','required']) !!}
</div></div>
       <div class="form-group col-lg-8">
  {!! Form::label('type','TIPO',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-8">
  {!! Form::select('type',['' => 'Seleccione un Rol', 'member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
</div></div>
<br>
       <div class="form-group col-lg-8">
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection
