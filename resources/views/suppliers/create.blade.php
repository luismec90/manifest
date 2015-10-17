@extends('master')

@section('css')
@stop

@section('js')
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('suppliers.index') }}"><i
                    class="fa fa-reply"></i></a> Crear provedor</h1>

    @include('partials.errors')


    {!! Form::open(['url' => 'suppliers','class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre: *') !!}
        {!! Form::text('name',null,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nit', 'NIT:') !!}
        {!! Form::text('nit',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact_name', 'Nombre de contacto:') !!}
        {!! Form::text('contact_name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact_phone', 'Tel&eacute;fono de contacto:') !!}
        {!! Form::text('contact_phone',null,['class'=>'form-control']) !!}
    </div>

    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection