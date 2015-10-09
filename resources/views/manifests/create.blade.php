@extends('master')

@section('content')
    <h1>Crear manifiesto</h1>
    {!! Form::open(['url' => 'manifests']) !!}

    <div class="form-group">
        {!! Form::label('code', 'Codigo:') !!}
        {!! Form::text('code',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('supplier', 'Provedor:') !!}
        {!! Form::text('supplier',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection