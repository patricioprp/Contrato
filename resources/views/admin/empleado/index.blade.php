@extends('admin.template.main')
@section('title','Listado de Contratista')
@section('content')
@section('empleado','active')
<h3><b>Modulo de Gestion de Consultor</b></h3>
<!--BUSCADOR DE CONSULTOR -->
{!! Form::open(['route'=>'empleado.index','method'=>'GET','autocomplete' => 'off',
 'class'=> 'navbar-form pull-right', 'id' => 'formSearch']) !!}
<div class="input-group">
    {!! Form::text('apellido',null,['class' => 'form-control', 'placeholder'=>'Buscar Consultor',
      'aria-describedby'=>'search']) !!}


            <div class="input-group-btn">
                <button type="submit" form="formSearch" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </div>
</div>
{!! Form::close() !!}
<!-- FIN DEL BUSCADOR-->
<a href="{{ asset('admin/empleado/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
  <div class="col-xs-12">
<div class="table-responsive">
  <table class="table table-condensed table-bordered table-bordered">
    <thead>
      <th>#</th>
      <th>DNI</th>
      <th>CUIT</th>
      <th>NOMBRE</th>
      <th>APELLIDO</th>
      <th>PROGRAMA</th>
      <th>REPARTICION</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($empleados as $empleado)
         <tr>
           <td>{{$empleado->id}}</td>
           <td>{{$empleado->dni}}</td>
           <td>{{$empleado->cuit}}</td>
           <td>{{$empleado->nombre}}</td>
           <td>{{$empleado->apellido}}</td>
           <td>{{$empleado->programa->nombre}}</td>
           <td>{{$empleado->distribution->nombre}}</td>
           <td><a href="{{route('admin.empleado.destroy',$empleado->id)}}" onclick="return confirm('Desea eliminar a {{$empleado->nombre}} {{$empleado->apellido}}?')" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
               <a href="{{route('empleado.edit',$empleado->id)}}" class="btn btn-warning" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
               <a href="{{route('admin.empleado.show',$empleado->id)}}" class="btn btn-success" title="Ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
         </tr>
      @endforeach

    </tbody>
  </table>
</div>
</div>
{!! $empleados->render() !!}
@endsection
