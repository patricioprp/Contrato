@extends('admin.template.main')
@section('title','Editar Programa')
@section('content')
<h2>Editar Programa {{$programa->nombre}}</h2>
@section('programa','active')
{!! Form::open(['route' => ['programa.update',$programa],'method'=>'PUT']) !!}

<div class="form-group">

  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',$programa->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}

<br>
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
