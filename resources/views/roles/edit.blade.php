@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Rol
                </div>

                <div class="card-body">
                    <form action="{{ route('roles.update',$role->id) }}" method="post">
                        @method('put')
                        @include('roles.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
