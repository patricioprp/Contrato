  @extends('admin.template.main')
  @section('title','Listado de Contratos')
  @section('content')
  @section('contrato','active')
  <h3><b>Modulo de Gestion de Contrato</b></h3>
  <a href="{{ asset('admin/contrato/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

    <table class="table table-condensed table-bordered table-bordered table-responsive">
      <thead>
        <th>DNI</th>
        <th>APELLIDO</th>
        <th>NOMBRE</th>
        <th>#</th>
        <th>FONDOS DE ORIGEN</th>
        <th>INDICADOR<p>(Dias Restantes)</p></th>
        <th>MONTO<p>($)</p></th>
        <th>DURACION<p>(Meses)</p></th>
        <th>ESTADO</th>
        <th>TIPO<p>(obra,servicio, etc.)</p></th>
        <th>ACTIVIDAD</th>
        <th>DESDE</th>
        <th>HASTA</th>
        <th>Accion</th>
      </thead>
      <tbody>
        @foreach ($contratos as $contrato)
           <tr>
             <td>{{$contrato->empleado->dni}}</td>
             <td>{{$contrato->empleado->apellido}}</td>
             <td>{{$contrato->empleado->nombre}}</td>
             <td>{{$contrato->id}}</td>
             <td>{{$contrato->fondos_origen}}</td>
             <td>{{$contrato->indicador}}</td>
             <td>{{$contrato->monto}}</td>
             <td>{{$contrato->duracion}}</td>
             <td>{{$contrato->estado}}</td>
             <td>{{$contrato->tipo}}</td>
             <td>{{$contrato->actividad}}</td>
             <td>{{$contrato->desde}}</td>
             <td>{{$contrato->hasta}}</td>
             <td><a href="{{route('admin.contrato.destroy',$contrato->id)}}"onclick="return confirm('Desea eliminar a {{$contrato->id}} {{$contrato->tipo}}?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                 <a href="{{route('contrato.edit',$contrato->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                 <a href="" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
           </tr>
        @endforeach

      </tbody>
    </table>
  {!! $contratos->render() !!}
  @endsection
