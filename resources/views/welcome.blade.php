@extends('admin.template.main') <!-- es se vincula para que se apliquen los estilos definidos en la ruta -->


<!-- paso el valor "gestion de contratos" a la variable title que esta definida en un yield en main.blade.php -->
@section('title','Gestion de contratos')

@section('content')
  <div class="center"><h1>SISTEMA WEB PARA SEGUIMIENTO DE CONTRATOS</h1></div>
  <h2>PUNTOS A TENER EN CUENTA:</h2>
  <ul>
    <li><h3>Si se quiere eliminar una Reparticion o Programa con el cual se dio de alta un Consultor, se debe eliminar antes
    el Consultor y luego eliminar el Programa o Reparticion, de lo contrario se puede editar el Programa o Reparticion y automaticamente
  se modificaran dichas propiedad del Consultor.</h3></li>
    <li><h3>Solo los Usuarios con privilegios de ADMINISTRADOR y ademas que esten logueados tendran acceso a la informarcion del sistema.</li>
  </ul>
@endsection
