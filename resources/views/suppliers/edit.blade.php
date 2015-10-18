@extends('master')
@section('css')
@stop

@section('js')
    <script>
        $(function () {
            $("#btn-delete-supplier").click(function () {
                $("#modal-delete-supplier").modal('show');
            });
        });
    </script>
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('suppliers.index') }}"><i
                    class="fa fa-reply"></i></a> Editar provedor
    <button id="btn-delete-supplier" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar</button>
    </h1>

    @include('partials.errors')


    {!! Form::open(['route' => ['suppliers.update',$supplier->id],'method'=>'PUT','class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name',$supplier->name,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nit', 'NIT:') !!}
        {!! Form::text('nit',$supplier->nit,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact_name', 'Nombre de contacto:') !!}
        {!! Form::text('contact_name',$supplier->contact_name,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('contact_phone', 'Tel&eacute;fono de contacto:') !!}
        {!! Form::text('contact_phone',$supplier->contact_name,['class'=>'form-control']) !!}
    </div>
    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


            <!-- Modal Delete Brand -->
    <div class="modal fade" id="modal-delete-supplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar provedor</h4>
                </div>
                {!! Form::open(['route' => ['suppliers.destroy',$supplier->id],'method'=>'DELETE','class'=>'validate-form']) !!}
                <div class="modal-body">
                    <p>
                        Realmente deseas eliminar el provedor <span id="supplier-code" class="text-info">{{ $supplier->name }}</span>?
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