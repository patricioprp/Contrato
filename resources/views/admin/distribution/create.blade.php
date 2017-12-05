
@extends('admin.template.main')
@section('title','Crear Reparticiones')
@section('content')

{!! Form::open(['route' => 'distribution.store','method'=>'POST']) !!}

<div class="form-group">

  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}

  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
