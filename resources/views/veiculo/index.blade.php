@extends('master')

@section('breadcrumb', 'Veículo')

@section('title', 'Veículo')

@section('content')
<div class="row">
    <div class="col-md-12 text-right"><a class="btn btn-primary" href="{{ route('veiculo.create') }}"><i class="fas fa-plus"></i> Cadastrar Veículo</a></div>
    <br>
    <br>
    <div class="col-md-12">
        <div class="table-responsive no-padding">
            <div class="dataTables_wrapper no-footer">
                <table id="user_table" class="table table-hover table-bordered table-datatable table-striped" role="grid">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Placa</th>
                            <th>Renavam</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ano</th>
                            <th>Cor</th>
                            <th>Data de Criação</th>
                            <th>Ações</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        @each('veiculo.veiculo', $veiculos, 'veiculo')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection