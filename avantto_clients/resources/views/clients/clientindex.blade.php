@extends('template.master')

@section('main_title')
    Leads
@endsection

@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Leads Avantto</h3>
        </div>

        <div class="card-body">
            <a href="/clientindex/create" class="btn btn-primary mb-2">Adicione um lead</a>
            <table id="clients" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nome do Lead</th>
                        <th>Ranking</th>
                        <th>Possível Renda</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $cliente)
                        <tr>
                            <td>{{ $cliente->nome_principal }}</td>
                            <td>{{ $cliente->ranking }}</td>
                            <td>{{ $cliente->possivel_renda }}</td>
                            <td>{{ $cliente->telefone_1 }}</td>
                            <td>{{ $cliente->email_1 }}</td>
                            <td>
                                <form action="clientindex/{{ $cliente->id }}" method="POST">
                                    <a href="{{ route('client.show', $cliente->id) }}" class="btn btn-success">Detalhes</a>
                                    <a href="{{ route('client.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Você tem certeza?')">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $cliente->paginate() }}
            </div>
        </div>
    </div>
@endsection
