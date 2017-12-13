@extends('admin.template.main')
@section('title','Edicion de Contratos')
@section('content')
@section('contrato','active')

{!! Form::open(['route' => ['contrato.update',$contrato],'method'=>'PUT']) !!}
<h2>Editando Consultor: {!!$empleado!!}</h2>
<div class="form-group">
  {!! Form::label('empleado','Empleado') !!}
  {!! Form::select('empleado',$empleado,null,['class' => 'form-control','required']) !!}

  {!! Form::label('fondos_origen','Fondos de Origen') !!}
  {!! Form::text('fondos_origen',$contrato->fondos_origen,['class' => 'form-control', 'placeholder'=>'Fondos de Origen','required']) !!}
  {!! Form::label('indicador','Indicador(Dias restantes)') !!}
  {!! Form::text('indicador',$contrato->indicador,['class' => 'form-control', 'placeholder'=>'Indicador','required']) !!}
  {!! Form::label('monto','Monto($)') !!}
  {!! Form::text('monto',$contrato->monto,['class' => 'form-control', 'placeholder'=>'Monto','required']) !!}
  {!! Form::label('duracion','Duracion') !!}
  {!! Form::text('duracion',$contrato->duracion,['class' => 'form-control', 'placeholder'=>'Duracion','required']) !!}

  {!! Form::label('estado','Estado') !!}
  {!! Form::select('estado',['' => 'Seleccione un Estado', 'activo'=>'activo','proximo'=>'proximo','finalizado'=>'finalizado'],null,['class'=>'form-control']) !!}
  {!! Form::label('tipo','Tipo(Obra,Servicio, etc.)') !!}
  {!! Form::text('tipo',$contrato->tipo,['class' => 'form-control', 'placeholder'=>'tipo','required']) !!}
  {!! Form::label('actividad','Actividad') !!}
  {!! Form::text('actividad',$contrato->actividad,['class' => 'form-control', 'placeholder'=>'actividad','required']) !!}


  {!! Form::label('desde','desde') !!}
  {!! Form::text('desde',$contrato->desde,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
  {!! Form::label('hasta','hasta') !!}
  {!! Form::text('hasta',$contrato->hasta,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}
@endsection
