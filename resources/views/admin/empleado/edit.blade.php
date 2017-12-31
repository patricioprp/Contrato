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
  {!! Form::select('programa_id',$programas,null,['class' => 'form-control','placeholder'=>'SELECCIONE EL PROGRAMA','required']) !!}
</div></div>
     <div class="form-group col-lg-10">
  {!! Form::label('distribution_id','Reparticion',['class'=>'col-lg-1 control-label']) !!}
           <div class="col-lg-4">
  {!! Form::select('distribution_id',$reparticiones,null,['class' => 'form-control','placeholder'=>'SELECCIONE LA REPARTICION','required']) !!}
</div></div>
<br>
     <div class="form-group col-lg-8">
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
</div>


{!! Form::close() !!}

@endsection
