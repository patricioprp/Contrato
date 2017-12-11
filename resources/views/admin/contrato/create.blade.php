@extends('admin.template.main')
@section('title','Crear Contrato')
@section('content')
@section('contrato','active')
{!! Form::open(['route' => 'contrato.store','method'=>'POST']) !!}

<div class="form-group">
  {!! Form::label('empleado','Empleado') !!}
  {!! Form::select('empleado',$empleados,null,['class' => 'form-control','required']) !!}

  {!! Form::label('fondos_origen','Fondos de Origen') !!}
  {!! Form::text('fondos_origen',null,['class' => 'form-control', 'placeholder'=>'Fondos de Origen','required']) !!}
  {!! Form::label('indicador','Indicador') !!}
  {!! Form::text('indicador',null,['class' => 'form-control', 'placeholder'=>'Indicador','required']) !!}
  {!! Form::label('monto','Monto') !!}
  {!! Form::text('monto',null,['class' => 'form-control', 'placeholder'=>'Monto','required']) !!}
  {!! Form::label('duracion','Duracion') !!}
  {!! Form::text('duracion',null,['class' => 'form-control', 'placeholder'=>'Duracion','required']) !!}

  {!! Form::label('estado','Estado') !!}
  {!! Form::select('estado',['' => 'Seleccione un Estado', 'activo'=>'activo','proximo'=>'proximo','finalizado'=>'finalizado'],null,['class'=>'form-control']) !!}
  {!! Form::label('tipo','Tipo') !!}
  {!! Form::text('tipo',null,['class' => 'form-control', 'placeholder'=>'tipo','required']) !!}
  {!! Form::label('actividad','Actividad') !!}
  {!! Form::text('actividad',null,['class' => 'form-control', 'placeholder'=>'actividad','required']) !!}


  {!! Form::label('desde','desde') !!}
  {!! Form::text('desde',null,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
  {!! Form::label('hasta','hasta') !!}
  {!! Form::text('hasta',null,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
