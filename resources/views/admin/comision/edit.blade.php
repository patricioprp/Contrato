@extends('admin.template.main')
@section('title','Editar Comision')
@section('content')
@section('contrato','active')
{!! Form::open(['route' => ['comision.update',$comision],'method'=>'PUT']) !!}
<div class="form-group">
<div class="form-group col-lg-6">
{!! Form::label('desde','desde',['class'=>'col-lg-1 control-label']) !!}
<div class="col-lg-6">
{!! Form::text('desde',\Carbon\Carbon::parse($comision->desde)->format('d-m-Y'),['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
</div></div>
  <div class="form-group col-lg-6">
{!! Form::label('hasta','hasta',['class'=>'col-lg-1 control-label']) !!}
 <div class="col-lg-6">
{!! Form::text('hasta',\Carbon\Carbon::parse($comision->hasta)->format('d-m-Y'),['class' => 'form-control', 'placeholder'=>'aaaa-dd-aa','required']) !!}
</div></div>
<div class="form-group col-lg-6">
{!! Form::label('observaciones','Observaciones',['class'=>'col-lg-1 control-label']) !!}
<div class="col-lg-6">
{!! Form::text('observaciones',$comision->observaciones,['class' => 'form-control', 'placeholder'=>'observaciones','required']) !!}
</div></div>
<br>
       <div class="form-group col-lg-8">
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection
