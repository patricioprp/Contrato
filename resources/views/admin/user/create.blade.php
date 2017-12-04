@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')
{!! Form::open(['route' => 'user.store','method'=>'POST']) !!}
@endsection
