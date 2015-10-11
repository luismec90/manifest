@extends('master')

@section('content')
    <h1>Manifiestos</h1>
    <a href="{{url('/manifests/create')}}" class="btn btn-success">Crear manifiesto</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>C&oacute;digo</th>
            <th>Provedor</th>
            <th colspan="2">Opciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($manifests as $manifest)
            <tr>
                <td>{{ $manifest->code }}</td>
                <td>{{ $manifest->supplier }}</td>
                <td>
                    <a href="{{url('manifests',$manifest->id)}}" class="btn btn-primary">Ver</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['manifests.destroy', $manifest->id],'class'=>'form-inline']) !!}
                    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection