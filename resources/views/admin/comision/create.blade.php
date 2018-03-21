@extends('admin.template.main')
@section('title','Crear Comision')
@section('content')
@section('contrato','active')
  {!! Form::open(['route' => 'comision.store','method'=>'POST']) !!}
{{dd($contrato->empleado->nombre)}}
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
<div class="form-group col-lg-8">
{!! Form::label('observaciones','Observaciones',['class'=>'col-lg-2 control-label']) !!}
<div class="col-lg-12">
{!! Form::text('observaciones',null,['class' => 'form-control', 'placeholder'=>'Observaciones','required']) !!}
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
  $('.select-contrato').chosen({
no_results_text: "No se encontro ninguna coincidencia con:",
max_selected_options: 1,
placeholder_text_multiple: "SELECCIONE UN Contrato"
  });
</script>
@endsection
