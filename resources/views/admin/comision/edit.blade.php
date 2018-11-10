@extends('admin.template.main')
@section('title','Editar Comision')
@section('content')
@section('contrato','active')
  <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading"><h3><p>Informacion del Consultor: <h2>{{$comision->contrato->empleado->nombre}}  {{$comision->contrato->empleado->apellido}}  |  Reparticion:{{$comision->contrato->empleado->distribution->nombre}} | Programa: {{$comision->contrato->empleado->programa->nombre}} </h2></p></h3></div>
    <div class="panel-body">

{!! Form::open(['route' => ['comision.update',$comision],'method'=>'PUT']) !!}
<div class="row">
<div class="form-group col-lg-6">
{!! Form::label('desde','desde',['class'=>'col-lg-1 control-label']) !!}
<div class="col-lg-6">
{!! Form::date('desde',$comision->desde,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
</div></div>
  <div class="form-group col-lg-6">
{!! Form::label('hasta','hasta',['class'=>'col-lg-1 control-label']) !!}
 <div class="col-lg-6">
{!! Form::date('hasta',$comision->hasta,['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
</div></div>
</div>
<hr />
<div class="row">
  <div class="col-lg-2">
    {!! Form::label('observaciones','Observaciones',['class'=>'control-label']) !!}
  </div>
    <div class="col-lg-2">
    {!! Form::textarea('observaciones',$comision->observaciones,['class' => 'form-control', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none', 'placeholder'=>'observaciones','required']) !!}

    </div>
</div>

<br>
       <div class="form-group col-lg-8">
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
</div>

    </div>
{!! Form::close() !!}

@endsection
