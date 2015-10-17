@extends('master')

@section('js')
@stop

@section('content')

    <h1> Categor&iacute;as
        <small>({{ $brands->total() }} encontradas)</small>
        <a href="{{url('/brands/create')}}" class="btn btn-success pull-right">Crear categor&iacute;a</a>
    </h1>

    <hr>
    <div class="row">
        {!! Form::open(['route' => 'brands.index','method'=>'GET','class'=>'validate-form']) !!}

        <div class="col-xs-10">
            <input type="text" class="form-control" value="{{ Request::get('name') }}"
                   placeholder="Nombre" name="name" autofocus>
        </div>


        <div class="col-xs-1">
            <button class="btn btn-primary btn-block" type="submit" title="Buscar"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>

        <div class="col-xs-1">
            <a href="{{ route("brands.index") }}" class="btn btn-default btn-block"
               title="Reinicar b&uacute;squeda"><i
                        class="glyphicon glyphicon-refresh"></i>
            </a>
        </div>

        </form>
    </div>
    <hr>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr class="bg-info">
            <th>Nombre</th>
            <th>Fecha</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td>{{  strftime("%Y-%m-%d %l:%M %p", strtotime($brand->created_at)) }}</td>
                <td class="text-center">
                    <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-primary btn-sm" title="Editar o eliminar esta categor&iacute;a"> <span
                                class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                </td>

            </tr>
        @endforeach

        </tbody>

    </table>

    {!! $brands->appends(array_filter(Request::all()))->render() !!}

@endsection