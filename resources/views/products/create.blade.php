@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Producto
                </div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post">
                        @include('products.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
