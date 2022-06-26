<tr>
    <td>{{ $veiculo->id }}</td>
    <td>{{ $veiculo->placa }}</td>
    <td>{{ $veiculo->renavam }}</td>
    <td>{{ $veiculo->marca }}</td>
    <td>{{ $veiculo->modelo }}</td>
    <td>{{ $veiculo->ano }}</td>
    <td>{{ $veiculo->cor }}</td>
    <td>{{ Carbon\Carbon::parse($veiculo->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Veículo" class="btn btn-info" href="{{ route('veiculo.edit',  ['id'=>$veiculo->id]) }}" ><i class="fa fa-edit fa-fw"></i></a>
        <a title="Excluir Veículo" class="btn btn-danger" href="{{ route('veiculo.destroy',  ['id'=>$veiculo->id]) }}" ><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>