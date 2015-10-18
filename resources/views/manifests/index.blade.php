@extends('master')
@section('css')

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
    <!-- Bootstrap styling for Typeahead -->
    <link href="/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <!-- Tokenfield CSS -->
    <link href="/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-tokenfield.js"></script>

    <script>
        $(function () {
            $("#select2-supplier").select2({
                placeholder: "Provedor",
            });

            $("#select2-brand").select2({
                placeholder: "Categoria",
            });
            $('#products').tokenfield({
                delimiter: ' '
            });
        });
    </script>
@stop

@section('content')
    <h1>Manifiestos <small>({{ $manifests->total() }} encontrados)</small>
        <a href="{{url('/manifests/create')}}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear manifiesto</a>
    </h1>
    <hr>
    <div class="row">
        {!! Form::open(['route' => 'manifests.index','method'=>'GET','class'=>'validate-form']) !!}

      <!--  <div class="col-xs-3">
            <input type="text" class="form-control" value="{{ Request::get('code') }}"
                   placeholder="N&uacute;mero del manifiesto" name="code" autofocus>
        </div>
        -->

        <div class="col-xs-4">
            {!! Form::select('supplier_id', $suppliers,Request::get('supplier_id'),['id'=>'select2-supplier']) !!}
        </div>

        <div class="col-xs-3">
            <input type="text" class="form-control" value="{{ Request::get('description') }}"
                   placeholder="Descripci&oacute;n" name="description">
        </div>


        <div class="col-xs-3">
            <input type="text" class="form-control" value="{{ Request::get('reference') }}"
                   placeholder="Referencia del producto" name="reference">
        </div>

        <div class="col-xs-1">
            <button class="btn btn-primary btn-block" type="submit" title="Buscar"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>

        <div class="col-xs-1">
            <a href="{{ route("manifests.index") }}" class="btn btn-default btn-block"
               title="Reinicar b&uacute;squeda"><i
                        class="glyphicon glyphicon-refresh"></i>
            </a>
        </div>

        </form>
    </div>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>N&uacute;mero del manifiesto</th>
            <th>Provedor</th>
            <th class="hidden-xs">Descripci&oacute;n</th>
            <th class="">Referencias de los productos</th>
            <th class="col-xs-1 hidden-xs">Fecha de creaci&oacute;n</th>
            <th  class=""></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($manifests as $manifest)
            <tr>
                <td>{{ $manifest->code }}</td>
                <td>{{ $manifest->supplier->name }}</td>
                <td class="hidden-xs">{{ $manifest->description }}</td>
                <td>
                    @foreach($manifest->products as $product)
                        <div class="custom-token"> {{ $product->reference }} </div>
                    @endforeach
                </td>
                <td class="hidden-xs">{{  strftime("%Y-%m-%d %l:%M %p", strtotime($manifest->created_at)) }}</td>
                <td class="text-center">
                    <a href="{{route('manifests.edit',$manifest->id)}}" class="btn btn-primary btn-sm"
                       title="Editar o eliminar este manifiesto"> <span
                                class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

    {!! $manifests->appends(array_filter(Request::all()))->render() !!}


@endsection