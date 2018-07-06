@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>
                      <strong>Roles
                        @can('roles.create')
                          <a href="{{ route('roles.create') }}" class="btn btn-md btn-primary pull-right">Crear</a>
                        @endcan
                      </strong>
                    </h4>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-responsive table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th scope="col">{{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('roles.show')
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-default">Ver</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-default">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('roles.destroy')
                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>

@endsection
