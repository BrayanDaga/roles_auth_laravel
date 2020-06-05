@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}"
                        class="btn btn-sm btn-primary float-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th width="10px">ID</th>
                            <th>Nombre</th>
                            <th colspan="3">&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    @can('roles.show')
                                       <td>
                                        <a href="{{ route('roles.show',$role->id) }}"
                                            class="btn btn-sm btn-light">Ver</a>
                                        </td>
                                    @endcan
                                    @can('roles.edit')
                                    <td>
                                     <a href="{{ route('roles.edit',$role->id) }}"
                                         class="btn btn-sm btn-warning">Editar</a>
                                     </td>
                                    @endcan
                                    @can('roles.destroy')
                                    <td>
                                        <form action="{{ route('roles.destroy',$role->id) }}"
                                             method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
