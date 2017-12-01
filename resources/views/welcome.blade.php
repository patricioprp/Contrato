@extends('admin.template.main') <!-- es se vincula para que se apliquen los estilos definidos en la ruta -->


<!-- paso el valor "gestion de contratos" a la variable title que esta definida en un yield en main.blade.php -->
@section('title','Gestion de contratos')

@section('content')
  <h1>Esto es bootstrap</h1>
  <a href="" class="btn btn-success" > Boton de Bootstrap</a>
@endsection
