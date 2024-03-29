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

            $("#btn-delete-manifest").click(function () {
                $("#modal-delete-manifest").modal('show');
            });
        });
    </script>
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('manifests.index') }}"><i
                    class="fa fa-reply"></i></a> Editar manifiesto
        <button id="btn-delete-manifest" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"
                                                                                 aria-hidden="true"></span> Eliminar
        </button>
    </h1>

    @include('partials.errors')


    {!! Form::open(['route' => ['manifests.update',$manifest->id],'method'=>'PUT','files' => true,'class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('code', 'Codigo:') !!}
        {!! Form::text('code',$manifest->code,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('supplier_id', 'Provedor: *') !!}
        <div>
            {!! Form::select('supplier_id', $suppliers,$manifest->supplier_id,['id'=>'select2-supplier','required'=>'true']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('products', 'Productos: *') !!}
        {!! Form::text('products', implode(" ",$manifest->products->lists('reference')->all()),['class'=>'form-control input-lg','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descripci&oacute;n:') !!}
        <div>
            {!! Form::text('description',$manifest->description,['class'=>'form-control']) !!}
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('photos', 'Fotos del manifiesto:') !!}
        @if($manifest->photos!=[])
            <ul>
                @foreach($manifest->photos as $index => $photo)
                    <li>
                        <a href="{{ $photo->path() }}" target="_blank">
                            Foto {{ $index+1 }}
                            <label class="text-danger">
                                Eliminar <input type="checkbox" name="delete-photos[]" value="{{ $photo->id }}">
                            </label>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <div class="input-group">

            {!! Form::file('photos[]',['accept'=>'image/*','multiple'=>'true']) !!}

        </div>
    </div>

    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>


    {!! Form::close() !!}

            <!-- Modal Delete Manifest -->
    <div class="modal fade" id="modal-delete-manifest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar manifiesto</h4>
                </div>
                {!! Form::open(['route' => ['manifests.destroy',$manifest->id],'method'=>'DELETE','class'=>'validate-form']) !!}
                <div class="modal-body">
                    <p>
                        Realmente deseas eliminar el manifiesto <span class="text-info">{{ $manifest->code }}</span>?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection