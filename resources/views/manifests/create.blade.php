@extends('master')
@section('css')
        <!-- Bootstrap styling for Typeahead -->
<link href="/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
<!-- Tokenfield CSS -->
<link href="/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet"/>
<style>
    .select2-container .select2-selection--single {
        height: 34px !important;
        border: 1px solid #ccc;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 32px;
    }

    .select2-container {
        line-height: 32px !important;
        width: 100% !important;
    }
</style>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-tokenfield.js"></script>

    <script>
        $(function () {
            $("#select2-supplier").select2({
                placeholder: "Seleccionar",
            });

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


    {!! Form::open(['url' => 'manifests','class'=>'validate-form','files' => true]) !!}

    <div class="form-group">
        {!! Form::label('code', 'N&uacute;mero del manifiesto: *') !!}
        {!! Form::text('code',null,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('supplier_id', 'Provedor: *') !!}
        <div>
            {!! Form::select('supplier_id', $suppliers,null,['id'=>'select2-supplier','required'=>'true']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('products', 'Referencias de los productos: *') !!}
        {!! Form::text('products',null,['class'=>'form-control input-lg','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descripci&oacute;n:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photos', 'Fotos del manifiesto:') !!}
        <div class="input-group">

            {!! Form::file('photos[]',['accept'=>'image/*','multiple'=>'true']) !!}

        </div>
    </div>

    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}
@endsection