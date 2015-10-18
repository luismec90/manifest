@extends('master')

@section('js')
@stop

@section('content')

    <h1> Provedores
        <small>({{ $suppliers->total() }} encontrados)</small>
        <a href="{{url('/suppliers/create')}}" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear provedor</a>
    </h1>

    <hr>
    <div class="row">
        {!! Form::open(['route' => 'suppliers.index','method'=>'GET','class'=>'validate-form']) !!}

        <div class="col-xs-3">
            <input type="text" class="form-control" value="{{ Request::get('name') }}"
                   placeholder="Nombre" name="name" autofocus>
        </div>

        <div class="col-xs-3">
            <input type="text" class="form-control" value="{{ Request::get('nit') }}"
                   placeholder="NIT" name="nit">
        </div>

        <div class="col-xs-4">
            <input type="text" class="form-control" value="{{ Request::get('contact_name') }}"
                   placeholder="Nombre de contacto" name="contact_name">
        </div>

      {{--    <div class="col-xs-2">
            <input type="text" class="form-control" value="{{ Request::get('contact_phone') }}"
                   placeholder="Tel&eacute;fono de contacto" name="contact_phone">
        </div>
        --}}

        <div class="col-xs-1">
            <button class="btn btn-primary btn-block" type="submit" title="Buscar"><i
                        class="glyphicon glyphicon-search"></i>
            </button>
        </div>

        <div class="col-xs-1">
            <a href="{{ route("suppliers.index") }}" class="btn btn-default btn-block"
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
            <th>Nombre</th>
            <th>NIT</th>
            <th>Nombre de contacto</th>
            <th>Numero de contacto</th>
            <th class="hidden-xs">Fecha</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->nit }}</td>
                <td>{{ $supplier->contact_name }}</td>
                <td>{{ $supplier->contact_phone }}</td>
                <td class="hidden-xs">{{  strftime("%Y-%m-%d %l:%M %p", strtotime($supplier->created_at)) }}</td>
                <td class="text-center">
                    <a href="{{route('suppliers.edit',$supplier->id)}}" class="btn btn-primary btn-sm"
                       data-code="{{ $supplier->code }}" title="Editar o eliminar este provedor"> <span
                                class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                </td>

            </tr>
        @endforeach

        </tbody>

    </table>

    {!! $suppliers->appends(array_filter(Request::all()))->render() !!}

@endsection