@extends('admin.template.main')
@section('title','Crear Contrato')
@section('content')
@section('contrato','active')
{!! Form::open(['route' => 'contrato.store','method'=>'POST']) !!}

<div class="form-group">
       <div class="form-group col-lg-8">
  {!! Form::label('empleado','Empleado',['class'=>'col-lg-1 control-label']) !!}
       <div class="col-lg-8">
  {!! Form::select('empleado',$empleados,null,['class' => 'form-control','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('fondos_origen','Fondos de Origen',['class'=>'col-lg-1 control-label']) !!}
     <div class="col-lg-8">
  {!! Form::text('fondos_origen',null,['class' => 'form-control', 'placeholder'=>'Fondos de Origen','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('indicador','Indicador',['class'=>'col-lg-1 control-label']) !!}
       <div class="col-lg-8">
  {!! Form::text('indicador',null,['class' => 'form-control', 'placeholder'=>'Indicador','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('monto','Monto',['class'=>'col-lg-1 control-label']) !!}
         <div class="col-lg-8">
  {!! Form::text('monto',null,['class' => 'form-control', 'placeholder'=>'Monto','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('duracion','Duracion',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-8">
  {!! Form::text('duracion',null,['class' => 'form-control', 'placeholder'=>'Duracion','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('estado','Estado',['class'=>'col-lg-1 control-label']) !!}
             <div class="col-lg-8">
  {!! Form::select('estado',['' => 'Seleccione un Estado', 'activo'=>'activo','proximo'=>'proximo','finalizado'=>'finalizado'],null,['class'=>'form-control']) !!}
</div></div>
  {!! Form::label('tipo','Tipo',['class'=>'col-lg-1 control-label']) !!}
  {!! Form::text('tipo',null,['class' => 'form-control', 'placeholder'=>'tipo','required']) !!}
  {!! Form::label('actividad','Actividad',['class'=>'col-lg-1 control-label']) !!}
  {!! Form::text('actividad',null,['class' => 'form-control', 'placeholder'=>'actividad','required']) !!}


  {!! Form::label('desde','desde',['class'=>'col-lg-1 control-label']) !!}
  {!! Form::text('desde',null,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
  {!! Form::label('hasta','hasta',['class'=>'col-lg-1 control-label']) !!}
  {!! Form::text('hasta',null,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
