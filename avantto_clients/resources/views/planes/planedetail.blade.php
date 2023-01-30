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
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano de Fabricação</th>
                        <th>Proprietário</th>
                        <th>UF</th>
                        <th>CNJP Proprietário</th>
                        <th>Sócio Aeronave</th>
                        <th>Cargo</th>
                        <th>CPF</th>
                        <th>Operador</th>
                        <th>UF Operador</th>
                        <th>CNPJ Operador</th>
                        <th>Nº Certificado de Matricula</th>
                        <th>Número de Série</th>
                        <th>Categoria</th>
                        <th>Tipo</th>
                        <th>Fabricante</th>
                        <th>CLS</th>
                        <th>Nº PMD</th>
                        <th>Tipo</th>
                        <th>Nº Tripulação Mínima</th>
                        <th>Nº de Passageiros Máximo</th>
                        <th>Nº de Assentos</th>
                        <th>Data Validade</th>
                        <th>Data Validade</th>
                        <th>Observação</th>
                        <th>CEP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $detail->id }}</td>
                        <td>{{ $detail->marca }}</td>
                        <td>{{ $detail->modelo }}</td>
                        <td>{{ $detail->ano_fabricacao }}</td>
                        <td>{{ $detail->proprietario }}</td>
                        <td>{{ $detail->uf }}</td>
                        <td>{{ $detail->cpf_cnpj_proprietario }}</td>
                        <td>{{ $detail->socio_aeronave_1 }}</td>
                        <td>{{ $detail->cargo }}</td>
                        <td>{{ $detail->cpf }}</td>
                        <td>{{ $detail->operador }}</td>
                        <td>{{ $detail->uf_operador }}</td>
                        <td>{{ $detail->cpf_cnpj_operador }}</td>
                        <td>{{ $detail->num_cert_matricula }}</td>
                        <td>{{ $detail->num_serie }}</td>
                        <td>{{ $detail->categoria }}</td>
                        <td>{{ $detail->tipo }}</td>
                        <td>{{ $detail->fabricante }}</td>
                        <td>{{ $detail->cd_cls }}</td>
                        <td>{{ $detail->nr_pmd }}</td>
                        <td>{{ $detail->cd_tipo_icao }}</td>
                        <td>{{ $detail->num_tripulacao_min }}</td>
                        <td>{{ $detail->num_passageiros_max }}</td>
                        <td>{{ $detail->num_assentos }}</td>
                        <td>{{ $detail->dt_validade_iam }}</td>
                        <td>{{ $detail->dt_validade_ca }}</td>
                        <td>{{ $detail->observacao }}</td>
                        <td>{{ $detail->cep }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
