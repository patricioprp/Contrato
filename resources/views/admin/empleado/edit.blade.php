@extends('admin.template.main')
@section('title','Editar Contratista')
@section('content')
<h2>Editando Consultor: {{$empleado->nombre}},{{$empleado->apellido}}</h2>
@section('empleado','active')
{!! Form::open(['route' => ['empleado.update',$empleado],'method'=>'PUT']) !!}

     <div class="form-group col-lg-3">
  {!! Form::label('dni','DNI',['class'=>'col-lg-1 control-label']) !!}
       <div class="col-lg-6">
  {!! Form::text('dni',$empleado->dni,['class' => 'form-control', 'placeholder'=>'DNI','required']) !!}
</div></div>
 <div class="form-group col-lg-8">
  {!! Form::label('cuit','CUIT (Sin Guiones)',['class'=>'col-lg-3 control-label']) !!}
  <div class="col-lg-4">
  {!! Form::text('cuit',$empleado->cuit,['class' => 'form-control', 'placeholder'=>'CUIT','required']) !!}
</div></div>
<div class="form-group col-lg-8">
  {!! Form::label('nombre','NOMBRE',['class'=>'col-lg-1 control-label']) !!}
  <div class="form-group col-lg-6">
  {!! Form::text('nombre',$empleado->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
</div></div>
<div class="form-group col-lg-9">
  {!! Form::label('apellido','APELLIDO',['class'=>'col-lg-1 control-label']) !!}
    <div class="form-group col-lg-2">
  {!! Form::text('apellido',$empleado->apellido,['class' => 'form-control', 'placeholder'=>'APELLIDO','required']) !!}
</div></div>
     <div class="form-group col-lg-8">
  {!! Form::label('programa_id','Programa',['class'=>'col-lg-1 control-label']) !!}
         <div class="col-lg-4">
  {!! Form::select('programa_id',$programas,$empleado->programa->id,['class' => 'form-control select-programa','multiple','required']) !!}
</div></div>
     <div class="form-group col-lg-10">
  {!! Form::label('distribution_id','Reparticion',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-4">
  {!! Form::select('distribution_id',$reparticiones,$empleado->distribution->id,['class' => 'form-control select-reparticion','multiple','required']) !!}
</div></div>
<br>
     <div class="form-group col-lg-8">
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
</div>


{!! Form::close() !!}

@endsection
@section('js')
  <script>
    $('.select-programa').chosen({
no_results_text: "No se encontro ninguna coincidencia con:",
max_selected_options: 1,
placeholder_text_multiple: "SELECCIONE UN PROGRAMA"
    });
  </script>
  <script>
    $('.select-reparticion').chosen({
no_results_text: "No se encontro ninguna coincidencia con:",
max_selected_options: 1,
placeholder_text_multiple: "SELECCIONE UNA REPARTICION"
    });
  </script>
@endsection
