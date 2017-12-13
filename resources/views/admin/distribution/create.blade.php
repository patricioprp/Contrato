
@extends('admin.template.main')
@section('title','Crear Reparticiones')
@section('content')
@section('reparticion','active')
  <h3><b><p>Alta de Reparticion:</p></b></h3>
  <br>
{!! Form::open(['route' => 'distribution.store','method'=>'POST']) !!}
     <div class="form-group col-lg-4">
  {!! Form::label('nombre','NOMBRE',['class'=>'col-lg-3 control-label']) !!}
       <div class="col-lg-9">
  {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
</div>
</div>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
