@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>
                      <strong>Servicios
                        @can('roles.create')
                        <a href="{{ route('products.create') }}" class="btn btn-md btn-primary pull-right">Crear</a>
                        @endcan
                      </strong>
                    </h4>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @can('products.show')
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-default">Ver</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.edit')
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-default">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.destroy')
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}
                </div>
            </div>
        </div>
    </div>

@endsection
