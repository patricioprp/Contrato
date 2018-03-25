  @extends('admin.template.main')
  @section('title','Listado de Contratos')
  @section('content')
  @section('contrato','active')
  <h3><b>Modulo de Gestion de Contrato</b></h3>

  <a href="{{ asset('admin/contrato/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
   {{-- Buscador de tags --}}
    {!! Form::open(['route' => 'contrato.index', 'method' => 'GET', 'autocomplete' => 'off',
        'class' => 'navbar-form pull-right', 'id' => 'formSearch']) !!}
        <div class="input-group">
            {!! Form::text('estado', null, ['class' => 'form-control', 'placeholder' => 'Buscar']) !!}

            <div class="input-group-btn">
                <button type="submit" form="formSearch" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </div>
        </div>
{!! Form::close() !!}
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table table-condensed table-bordered table-bordered table-hover">
      <thead>
        <th>DNI</th>
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>PROGRAMA</th>
       <!-- <th>NUMERO DE CONTRATO</th> -->
        <th>FONDOS </th>
        <th>INDICADOR<!-- <p>(Dias Restantes)</p> --></th>
        <th>MONTO<p>($)</p></th>
        <th>DURACION<p>(Meses)</p></th>
        <th>ESTADO</th>
      <!--  <th>TIPO</th>
        <th>ACTIVIDAD</th> -->
        <th>DESDE</th>
        <th>HASTA</th>
        <th>ALERTA</th>
        <th>ACCION</th>
        <th>COMISIONES</th>

      </thead>
      <tbody>
        @foreach ($contratos as $contrato)
           <tr>
             <td>{{$contrato->empleado->dni}}</td>
             <td>{{$contrato->empleado->apellido}}</td>
             <td>{{$contrato->empleado->nombre}}</td>
             <td>{{$contrato->empleado->programa->nombre}}</td>

             <td>{{$contrato->fondos_origen}}</td>
             <td>{{$contrato->indicador}}</td>
             <td>{{$contrato->monto}}</td>
             <td>{{$contrato->duracion}}</td>
             <td>
             @if ($contrato->estado == "activo")
                <h4><span class="label label-success">{{$contrato->estado}}</h4></span>
             @elseif ($contrato->estado == "proximo")
                <h4><span class="label label-warning">{{$contrato->estado}}</h4></span>
             @else
               <h4><span class="label label-danger">{{$contrato->estado}}</h4></span>
             @endif
           </td>
             <td>{{\Carbon\Carbon::parse($contrato->desde)->format('d-m-Y')}}</td>
             <td>{{\Carbon\Carbon::parse($contrato->hasta)->format('d-m-Y')}}</td>
             <td>
                 @if ($contrato->alerta == "si")
                    <h4><span class="label label-success">{{$contrato->alerta}}</h4></span>
                 @elseif ($contrato->alerta == "no")
                    <h4><span class="label label-danger">{{$contrato->alerta}}</h4></span>
                 @endif
                </td>
             <td><a href="{{route('admin.contrato.destroy',$contrato->id)}}"onclick="return confirm('Desea eliminar el contrato de {{$contrato->empleado->nombre}} {{$contrato->empleado->apellido}}?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                 <a href="{{route('contrato.edit',$contrato->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
             <td><a href="{{route('admin.comision.create',$contrato->id)}}" class="btn btn-primary" title="Crear Comisiones"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                 <a href="{{route('admin.comision.show',$contrato->id)}}" class="btn btn-success" title="Ver Comisiones"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
           </tr>
        @endforeach

      </tbody>
    </table>
 </div>
 </div>
    <p>
     <a href="{{ route('Listado.excel',['estado'=>\Request::get('estado')]) }}" class="btn btn-sm btn-primary">
         Descargar en Archivo Excel</a>
 </p>
  {!! $contratos->render() !!}
  @endsection
