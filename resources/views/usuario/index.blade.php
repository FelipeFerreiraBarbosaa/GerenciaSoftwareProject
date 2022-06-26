@extends('master')

@section('breadcrumb', 'Usuario')

@section('title', 'Usuario')

@section('content')
<div class="row">
    <div class="col-md-12 text-right"><a class="btn btn-primary" href="{{ route('usuario.create') }}"><i class="fas fa-plus"></i> Cadastrar Usuario</a></div>
    <br>
    <br>
    <div class="col-md-12">
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="user_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @each('usuario.usuario', $usuario, 'usuario')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection