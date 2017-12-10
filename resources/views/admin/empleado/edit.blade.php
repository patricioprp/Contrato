@extends('admin.template.main')
@section('title','Editar Contratista')
@section('content')
<h2>Editar Nombre {{$empleado->nombre}}{{$empleado->apellido}}</h2>
@section('empleado','active')
{!! Form::open(['route' => ['empleado.update',$empleado],'method'=>'PUT']) !!}

<div class="form-group">

  {!! Form::label('dni','DNI') !!}
  {!! Form::text('dni',$empleado->dni,['class' => 'form-control', 'placeholder'=>'DNI','required']) !!}
  {!! Form::label('nombre','NOMBRE') !!}
  {!! Form::text('nombre',$empleado->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
  {!! Form::label('apellido','APELLIDO') !!}
  {!! Form::text('apellido',$empleado->apellido,['class' => 'form-control', 'placeholder'=>'APELLIDO','required']) !!}
  {!! Form::label('programa','Programa') !!}
  {!! Form::select('programa',['' => 'Seleccione un Programa', 'MDP'=>'MDP','UEDP'=>'UEDP','PRODERI'=>'PRODERI','PROICSA'=>'PROICSA'],$empleado->programa,['class'=>'form-control']) !!}
  {!! Form::label('distribution_id','Reparticion') !!}
  {!! Form::select('distribution_id',$reparticiones,null,['class' => 'form-control','required']) !!}
<br>
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

</div>
{!! Form::close() !!}

@endsection
