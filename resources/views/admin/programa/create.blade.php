@extends('admin.template.main')
@section('title','Crear Programa')
@section('content')
@section('programa','active')
{!! Form::open(['route' => 'programa.store','method'=>'POST']) !!}

<div class="form-group">
     <div class="form-group col-lg-4">
  {!! Form::label('nombre','NOMBRE',['class'=>'col-lg-3 control-label']) !!}
         <div class="col-lg-9">
  {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
</div></div>

  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
