  @extends('admin.template.main')
  @section('title','Listado de Reparticiones')
  @section('content')
  @section('contrato','active')
  <h3><b>Modulo de Gestion de Consultor</b></h3>
  <a href="{{ asset('admin/contrato/create')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>

    <table class="table table-condensed table-bordered table-bordered table-responsive">
      <thead>
        <th>#</th>
        <th>FONDOS DE ORIGEN</th>
        <th>INDICADOR</th>
        <th>MONTO</th>
        <th>DURACION</th>
        <th>ESTADO</th>
        <th>TIPO</th>
        <th>ACTIVIDAD</th>
        <th>DESDE</th>
        <th>HASTA</th>
        <th>Accion</th>
      </thead>
      <tbody>
        @foreach ($contratos as $contrato)
           <tr>
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
             <td><a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                 <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                 <a href="" class="btn btn-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></td>
           </tr>
        @endforeach

      </tbody>
    </table>
  {!! $contratos->render() !!}
  @endsection
