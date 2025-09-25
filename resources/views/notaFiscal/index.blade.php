@extends('layouts.app')

@section('content')
<h1>Lista de Notas Fiscais</h1>

<a href="{{ route('notaFiscal.create') }}">Criar Nova Nota</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Número</th>
            <th>Cliente</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notaFiscal as $nota)
        <tr>
            <td>{{ $nota->id }}</td>
            <td>{{ $nota->numero }}</td>
            <td>{{ $nota->cliente->nome ?? 'Sem cliente' }}</td>
            <td>{{ $nota->valor }}</td>
            <td>
                <a href="{{ route('notaFiscal.show', $nota->id) }}">Ver</a>
                <a href="{{ route('notaFiscal.edit', $nota->id) }}">Editar</a>
                <form action="{{ route('notaFiscal.destroy', $nota->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Deseja excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
