@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Productos
                    @can('products.create')
                        <a href="{{ route('products.create') }}"
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
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    @can('products.show')
                                       <td>
                                        <a href="{{ route('products.show',$product->id) }}"
                                            class="btn btn-sm btn-light">Ver</a>
                                        </td> 
                                    @endcan
                                    @can('products.edit')
                                    <td>
                                     <a href="{{ route('products.edit',$product->id) }}"
                                         class="btn btn-sm btn-warning">Editar</a>
                                     </td> 
                                    @endcan
                                    @can('products.destroy')
                                    <td>
                                        <form action="{{ route('products.destroy',$product->id) }}"
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
