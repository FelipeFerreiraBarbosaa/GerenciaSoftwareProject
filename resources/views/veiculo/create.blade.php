@extends('master')

@section('breadcrumb', 'Veículo / Criar')

@section('title', 'Veículo - Criar')

@section('content')

<div class="col-md-12 text-right">
    <a class="btn btn-primary" href="{{ route('veiculo') }}"><i class="fas fa-undo-alt"></i> Voltar</a>
</div>
<div class="col-md-12">
    <form class="m-t" role="form" method="POST" action="{{ route('veiculo.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('placa') ? 'has-error' : ''}}">
                    <label for="placa">Placa</label>
                    <input type="text" class="form-control" name="placa" placeholder="Placa">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('renavam') ? 'has-error' : ''}}">
                    <label for="renavam">Renavam</label>
                    <input type="text" class="form-control" name="renavam" placeholder="Renavam" maxlength="11">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('marca') ? 'has-error' : ''}}">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca" placeholder="Marca">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('modelo') ? 'has-error' : ''}}">
                    <label for="modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" placeholder="Modelo">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('ano') ? 'has-error' : ''}}">
                    <label for="ano">Ano</label>
                    <input type="text" class="form-control" name="ano" placeholder="Ano" maxlength="4">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group {{ $errors->has('cor') ? 'has-error' : ''}}">
                    <label for="cor">Cor</label>
                    <input type="text" class="form-control" name="cor" placeholder="Cor">
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