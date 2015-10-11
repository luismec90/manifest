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
    <h1>Crear manifiesto</h1>
    {!! Form::open(['url' => 'manifests']) !!}

    <div class="form-group">
        {!! Form::label('code', 'Codigo:') !!}
        {!! Form::text('code',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('supplier', 'Nombre del provedor:') !!}
        {!! Form::text('supplier',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('products', 'Productos:') !!}
        {!! Form::text('products',null,['class'=>'form-control input-lg']) !!}
    </div>
    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@endsection