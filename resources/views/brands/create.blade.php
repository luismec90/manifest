@extends('master')

@section('css')
@stop

@section('js')
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('brands.index') }}"><i
                    class="fa fa-reply"></i></a> Crear marca</h1>

    @include('partials.errors')


    {!! Form::open(['url' => 'brands','class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre: *') !!}
        {!! Form::text('name',null,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection