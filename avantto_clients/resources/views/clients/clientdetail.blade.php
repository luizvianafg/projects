@extends('template.master')

@section('main_title')
    Detalhes do Lead
@endsection

@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Lead</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Lead</th>
                        <th>Cargo</th>
                        <th>Ranking</th>
                        <th>Possível Renda</th>
                        <th>Telefone 1</th>
                        <th>Telefone 2</th>
                        <th>Telefone 3</th>
                        <th>Email 1</th>
                        <th>Email 2</th>
                        <th>Email 3</th>
                        <th>UF</th>
                        <th>Empresas Ligadas</th>
                        <th>CNPJ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $detail->id }}</td>
                        <td>{{ $detail->nome_principal }}</td>
                        <td>{{ $detail->cargo }}</td>
                        <td>{{ $detail->ranking }}</td>
                        <td>{{ $detail->possivel_renda }}</td>
                        <td>{{ $detail->telefone_1 }}</td>
                        <td>{{ $detail->telefone_2 }}</td>
                        <td>{{ $detail->telefone_3 }}</td>
                        <td>{{ $detail->email_1 }}</td>
                        <td>{{ $detail->email_2 }}</td>
                        <td>{{ $detail->email_3 }}</td>
                        <td>{{ $detail->uf }}</td>
                        <td>{{ $detail->empresas_ligadas }}</td>
                        <td>{{ $detail->cnpj_empresas_ligadas }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
