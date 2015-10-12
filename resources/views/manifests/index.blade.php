@extends('master')

@section('content')
    <a href="{{url('/manifests/create')}}" class="btn btn-success pull-right">Crear manifiesto</a>
    <h1>Manifiestos </h1>


    <hr>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
        <tr class="bg-info">
            <th>C&oacute;digo</th>
            <th>Provedor</th>
            <th>Productos</th>
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
                <td>
                    <a href="{{url('manifests',$manifest->id)}}" class="btn btn-primary btn-sm">Ver</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['manifests.destroy', $manifest->id],'class'=>'form-inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger  btn-sm']) !!}
                    {!! Form::close() !!}
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

@endsection