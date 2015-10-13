@extends('master')

@section('js')
    <script>

        $(function () {
            $(".delete-manifest").click(function () {
                $("#manifest-code").html($(this).data("code"));
                $("#form-delete-manifest").attr("action", $(this).data("action"));
                $("#modal-delete-manifest").modal('show');
            });
        });

    </script>
@stop


@section('content')
    <a href="{{url('/manifests/create')}}" class="btn btn-success pull-right">Crear manifiesto</a>
    <h1> Manifiestos </h1>


    <hr>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr class="bg-info">
            <th>C&oacute;digo</th>
            <th>Provedor</th>
            <th>Productos</th>
            <th>Fecha de creaci&oacute;n</th>
            <th colspan="2">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($manifests as $manifest)
            <tr>
                <td>{{ $manifest->code }}</td>
                <td>{{ $manifest->supplier }}</td>
                <td>
                    @foreach($manifest->products as $product)
                        <div class="custom-token"> {{ $product->reference }} </div>
                    @endforeach
                </td>
                <td>{{  strftime("%Y-%m-%d %l:%M %p", strtotime($manifest->created_at)) }}</td>
                <td>
                    <a href="{{route('manifests.edit',$manifest->id)}}" class="btn btn-primary btn-sm"
                       data-code="{{ $manifest->code }}">Editar</a>
                </td>
                <td>
                    <button class="btn btn-danger btn-sm delete-manifest"
                            data-action="{{ route("manifests.destroy",$manifest->id) }}"
                            data-code="{{ $manifest->code }}">Eliminar
                    </button>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    @if(Request::get('s')!=="")
    {!! $manifests->appends(['s' => Request::get('s')])->render() !!}
    @else
    {!! $manifests->render() !!}
    @endif

            <!-- Modal Delete Manifest -->
    <div class="modal fade" id="modal-delete-manifest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Eliminar manifiesto</h4>
                </div>
                {!! Form::open(['id'=>'form-delete-manifest','method' => 'DELETE','class'=>'form-inline validate-form']) !!}
                <div class="modal-body">
                    <p>
                        Realmente deseas eliminar el manifiesto <span id="manifest-code" class="text-info"></span> ?
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