@extends('master')

@section('breadcrumb', 'Usuario / Criar')

@section('title', 'Usuario - Criar')

@section('content')

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{ route('usuario') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ route('usuario.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" name="surname" placeholder="Surname">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="exemplo@exemplo.com">
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-success block m-b">Salvar</button>
            </div>
        </div>
    </form>
</div>
<br>
@endsection