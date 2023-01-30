@extends('template.master')

@section('main_title')
    Aeronaves
@endsection

@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Lista de Aeronaves Avantto</h3>
        </div>

        <div class="card-body">
            <a href="/planeindex/create" class="btn btn-primary mb-2">Adicione uma aeronave</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Proprietário</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plane as $planes)
                        <tr>
                            <td>{{ $planes->marca }}</td>
                            <td>{{ $planes->modelo }}</td>
                            <td>{{ $planes->ano_fabricacao }}</td>
                            <td>{{ $planes->proprietario }}</td>
                            <td>
                                <form action="planeindex/{{ $planes->id }}" method="POST">
                                    <a href="{{ route('plane.show', $planes->id) }}" class="btn btn-success">Detalhes</a>
                                    <a href="{{ route('plane.edit', $planes->id) }}" class="btn btn-warning">Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
