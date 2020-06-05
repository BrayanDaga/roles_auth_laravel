@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Usuario
                    </div>

                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @method('PUT')
                            @include('users.partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
