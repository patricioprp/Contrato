@extends('admin.template.main')
@section('title','Editar Comision')
@section('content')
@section('contrato','active')
{!! Form::open(['route' => ['comision.update',$comision],'method'=>'PUT']) !!}


<br>
       <div class="form-group col-lg-8">
  {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
</div>
</div>
{!! Form::close() !!}

@endsection
