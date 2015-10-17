@extends('master')
@section('css')
@stop

@section('js')
    <script>
        $(function () {
            $("#btn-delete-brand").click(function () {
                $("#modal-delete-brand").modal('show');
            });
        });
    </script>
@stop

@section('content')
    <h1><a class="btn btn-primary" title="Ir atr&aacute;s" href="{{ route('brands.index') }}"><i
                    class="fa fa-reply"></i></a> Editar marca
    <button id="btn-delete-brand" class="btn btn-danger pull-right">Eliminar</button>
    </h1>

    @include('partials.errors')


    {!! Form::open(['route' => ['brands.update',$brand->id],'method'=>'PUT','class'=>'validate-form']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name',$brand->name,['class'=>'form-control','required'=>'true']) !!}
    </div>

    <br>
    <div class="form-group ">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


            <!-- Modal Delete Brand -->
    <div class="modal fade" id="modal-delete-brand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar marca</h4>
                </div>
                {!! Form::open(['route' => ['brands.destroy',$brand->id],'method'=>'DELETE','class'=>'validate-form']) !!}
                <div class="modal-body">
                    <p>
                        Realmente deseas eliminar el marca <span id="brand-code" class="text-info">{{ $brand->name }}</span>?
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