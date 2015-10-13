@extends('master')
@section('css')
        <!-- Bootstrap styling for Typeahead -->
<link href="/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
<!-- Tokenfield CSS -->
<link href="/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
@stop

@section('js')
    <script type="text/javascript" src="/js/bootstrap-tokenfield.js"></script>
    <script>
        $(function () {
            $('#products').tokenfield({
                delimiter: ' '
            });
        });
    </script>
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('manifests.index') }}"><i
                    class="fa fa-reply"></i></a> Crear manifiesto</h1>

    @include('partials.errors')


    {!! Form::open(['url' => 'manifests','class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('code', 'Codigo:') !!}
        {!! Form::text('code',null,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('supplier', 'Nombre del provedor:') !!}
        {!! Form::text('supplier',null,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('products', 'Productos:') !!}
        {!! Form::text('products',null,['class'=>'form-control input-lg','required'=>'true']) !!}
    </div>
    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@endsection