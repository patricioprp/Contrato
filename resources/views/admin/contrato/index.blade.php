  @extends('admin.template.main')
  @section('title','Listado de Reparticiones')
  @section('content')
  <button type="button" class="btn btn-primary"><a href="{{ asset('admin/contrato/create')}}"><font color="white">Nuevo</font></a></button>
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
             <td><a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a><a href="" class="btn btn-primary"></a></td>
           </tr>
        @endforeach

      </tbody>
    </table>
  {!! $contratos->render() !!}
  @endsection
