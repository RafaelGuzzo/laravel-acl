@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="links">
                            <a class="btn btn-outline-primary" href="{{ route('usuarios.index') }}" role="button">Usuários</a>
                            <a class="btn btn-outline-primary" href="{{ route('roles.index') }}" role="button">Perfis</a>
                            <a class="btn btn-outline-primary" href="#" role="button">Permissões</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
