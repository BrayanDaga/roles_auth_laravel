@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                @can('users.show')
                                <td width="10px">
                                    <a href="{{ route('users.show', $user->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('users.edit')
                                <td width="10px">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('users.destroy')
                                <td width="10px">
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
