@extends('admin.template.main')
@section('title','Crear Empleado')
@section('content')
@section('empleado','active')
  <h3><b><p>Ingrese los Datos del Consultor:</p></b></h3>

{!! Form::open(['route' => 'empleado.store','method'=>'POST']) !!}


     <div class="form-group col-lg-6">
  {!! Form::label('dni','DNI',['class'=>'col-lg-1 control-label']) !!}
     <div class="col-lg-11">
  {!! Form::text('dni',null,['class' => 'form-control', 'placeholder'=>'DNI','required']) !!}
</div>
</div>
  <div class="form-group col-lg-6">
{!! Form::label('cuit','CUIT',['class'=>'col-lg-1 control-label']) !!}
  <div class="col-lg-11">
{!! Form::text('cuit',null,['class' => 'form-control', 'placeholder'=>'CUIT(Sin Guiones)','required']) !!}
</div>
</div>
     <div class="form-group col-lg-6">
  {!! Form::label('nombre','NOMBRE',['class'=>'col-lg-2 control-label']) !!}
     <div class="col-lg-10">
  {!! Form::text('nombre',null,['class' => 'form-control', 'placeholder'=>'Nombre','required']) !!}
</div>
</div>
      <div class="form-group col-lg-6">
  {!! Form::label('apellido','APELLIDO',['class'=>'col-lg-3 control-label']) !!}
      <div class="col-lg-9">
  {!! Form::text('apellido',null,['class' => 'form-control', 'placeholder'=>'APELLIDO','required']) !!}
</div>
</div>
      <div class="form-group col-lg-6">
  {!! Form::label('programa_id','Programa',['class'=>'col-lg-3 control-label']) !!}
      <div class="col-lg-9">
  {!! Form::select('programa_id',$programas,null,['class' => 'form-control select-programa','multiple','required']) !!}
</div>
</div>
      <div class="form-group col-lg-6">
  {!! Form::label('distribution_id','Reparticion',['class'=>'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
  {!! Form::select('distribution_id',$reparticiones,null,['class' => 'form-control select-reparticion','multiple','required']) !!}
</div>
</div>
<br>
      <div class="form-group col-lg-12">
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
