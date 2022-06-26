<tr>
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->username }}</td>
    <td>{{ $usuario->password }}</td>
    <td>{{ $usuario->name }}</td>
    <td>{{ $usuario->surname }}</td>
    <td>{{ $usuario->email }}</td>
    <td>{{ Carbon\Carbon::parse($usuario->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Usuario" class="btn btn-info" href="{{ route('usuario.edit',  ['id'=>$usuario->id]) }}" ><i class="fa fa-edit fa-fw"></i></a>
        <a title="Excluir Usuario" class="btn btn-danger" href="{{ route('usuario.destroy',  ['id'=>$usuario->id]) }}" ><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>