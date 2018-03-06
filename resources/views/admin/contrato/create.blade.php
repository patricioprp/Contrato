@extends('admin.template.main')
@section('title','Crear Contrato')
@section('content')
@section('contrato','active')
{!! Form::open(['route' => 'contrato.store','method'=>'POST']) !!}

<div class="form-group">
      <div class="form-group col-lg-8">
  <p> {!! Form::label('empleado','Consultor',['class'=>'col-lg-1 control-label']) !!}</p>
       <div class="col-lg-8">
  {!! Form::select('empleado',$empleados,null,['class' => 'form-control select-empleado','multiple','required']) !!}
</div></div>
       <div class="form-group col-lg-8">
  {!! Form::label('fondos_origen','Fondos de Origen',['class'=>'col-lg-1 control-label']) !!}
     <div class="col-lg-8">
  {!! Form::text('fondos_origen',null,['class' => 'form-control', 'placeholder'=>'Fondos de Origen','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('monto','Monto',['class'=>'col-lg-1 control-label']) !!}
         <div class="col-lg-6">
  {!! Form::text('monto',null,['class' => 'form-control', 'placeholder'=>'Monto($)','required']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('estado','Estado',['class'=>'col-lg-1 control-label']) !!}
             <div class="col-lg-6">
  {!! Form::select('estado',['' => 'Seleccione un Estado', 'activo'=>'activo','proximo'=>'proximo','finalizado'=>'finalizado'],null,['class'=>'form-control']) !!}
</div></div>
       <div class="form-group col-lg-6">
  {!! Form::label('tipo','Tipo',['class'=>'col-lg-1 control-label']) !!}
  <div class="col-lg-6">
  {!! Form::text('tipo',null,['class' => 'form-control', 'placeholder'=>'Tipo','required']) !!}
  </div></div>
         <div class="form-group col-lg-6">
  {!! Form::label('actividad','Actividad',['class'=>'col-lg-1 control-label']) !!}
    <div class="col-lg-6">
  {!! Form::text('actividad',null,['class' => 'form-control', 'placeholder'=>'Actividad','required']) !!}
</div></div>
         <div class="form-group col-lg-6">
  {!! Form::label('desde','desde',['class'=>'col-lg-1 control-label']) !!}
      <div class="col-lg-6">
  {!! Form::text('desde',null,['class' => 'form-control', 'placeholder'=>'dd-mm-aaaa','required']) !!}
  </div></div>
           <div class="form-group col-lg-6">
  {!! Form::label('hasta','hasta',['class'=>'col-lg-1 control-label']) !!}
        <div class="col-lg-6">
  {!! Form::text('hasta',null,['class' => 'form-control', 'placeholder'=>'dd-mm-aaaa','required']) !!}
  </div></div>
<br>
           <div class="form-group col-lg-8">
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection
@section('js')
<script>
  $('.select-empleado').chosen({
no_results_text: "No se encontro ninguna coincidencia con:",
max_selected_options: 1,
placeholder_text_multiple: "SELECCIONE UN EMPLEADO"
  });
</script>
@endsection
