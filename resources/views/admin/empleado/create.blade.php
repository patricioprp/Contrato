@extends('admin.template.main')
@section('title','Crear Empleado')
@section('content')
{!! Form::open(['route' => 'empleado.store','method'=>'POST']) !!}

<div class="form-group">

  {!! Form::label('dni','DNI') !!}
  {!! Form::text('dni',null,['class' => 'form-control', 'placeholder'=>'DNI','required']) !!}
  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
  {!! Form::label('apellido','APELLIDO') !!}
  {!! Form::text('apellido',null,['class' => 'form-control', 'placeholder'=>'APELLIDO','required']) !!}
  {!! Form::label('type','TIPO') !!}
  {!! Form::select('type',['' => 'Seleccione un Programa', 'MDP'=>'MDP','UEDP'=>'UEDP','PRODERI'=>'PRODERI','PROICSA'=>'PROICSA'],null,['class'=>'form-control']) !!}
  {!! Form::label('distribution_id','Reparticion') !!}
  {!! Form::select('distribution_id',$reparticiones,null,['class' => 'form-control','required']) !!}  
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
