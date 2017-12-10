@extends('admin.template.main')
@section('title','Editar Reparticion')
@section('content')
<h2>Editar Reparticion {{$reparticion->nombre}}</h2>
@section('reparticion','active')
{!! Form::open(['route' => ['distribution.update',$reparticion],'method'=>'PUT']) !!}

<div class="form-group">

  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',$reparticion->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}

<br>
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
