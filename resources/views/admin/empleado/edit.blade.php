@extends('admin.template.main')
@section('title','Editar Contratista')
@section('content')
<h2>Editar Nombre {{$empleado->nombre}}{{$empleado->apellido}}</h2>
@section('empleado','active')
{!! Form::open(['route' => ['empleado.update',$empleado],'method'=>'PUT']) !!}

<div class="form-group">

  {!! Form::label('dni','DNI') !!}
  {!! Form::text('dni',$empleado->dni,['class' => 'form-control', 'placeholder'=>'DNI','required']) !!}
  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',$empleado->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
  {!! Form::label('apellido','APELLIDO') !!}
  {!! Form::text('apellido',$empleado->apellido,['class' => 'form-control', 'placeholder'=>'APELLIDO','required']) !!}
  {!! Form::label('programa_id','Programa') !!}
  {!! Form::select('programa_id',$programas,null,['class' => 'form-control','required']) !!}
  {!! Form::label('distribution_id','Reparticion') !!}
  {!! Form::select('distribution_id',$reparticiones,null,['class' => 'form-control','required']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
