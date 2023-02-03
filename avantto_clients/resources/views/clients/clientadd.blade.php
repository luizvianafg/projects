@extends('template.master')

@section('main_title')
    Adicione um lead
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Adicione um lead</h3>
            </div>
            <form action="/clientindex" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome_principal">Nome Principal</label>
                        <input type="text" class="form-control" id="nome_principal" name="nome_principal"
                            value="{{ old('nome_principal') }}" placeholder="Insira o nome do cliente">
                        @error('nome_principal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" value="{{ old('cargo') }}"
                            placeholder="Insira o nome do cliente">
                        @error('cargo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}"
                            placeholder="Insira o nome do cliente">
                        @error('cpf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ranking">Ranking</label>
                        <input type="text" class="form-control" id="ranking" name="ranking"
                            value="{{ old('ranking') }}" placeholder="Insira o ranking do cliente">
                        @error('ranking')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="possivel_renda">Possivel Renda</label>
                        <input type="text" class="form-control" id="possivel_renda" name="possivel_renda"
                            value="{{ old('possivel_renda') }}" placeholder="Selecione a renda do cliente">
                        @error('possivel_renda')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefone_1">Telefone_1</label>
                        <input type="text" class="form-control" id="telefone_1" name="telefone_1"
                            value="{{ old('telefone_1') }}" placeholder="Insira o telefone_1 principal">
                        @error('telefone_1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefone_2">Telefone_2</label>
                        <input type="text" class="form-control" id="telefone_2" name="telefone_2"
                            value="{{ old('telefone_2') }}" placeholder="Insira o telefone_2 principal">
                        @error('telefone_2')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefone_3">Telefone_3</label>
                        <input type="text" class="form-control" id="telefone_3" name="telefone_3"
                            value="{{ old('telefone_3') }}" placeholder="Insira o telefone_3 principal">
                        @error('telefone_3')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_1">Email_1</label>
                        <input type="email_1" class="form-control" id="email_1" name="email_1"
                            value="{{ old('email_1') }}"
                            placeholder="Insira o email_1 principal
                            ">
                        @error('email_1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_2">Email_2</label>
                        <input type="email_2" class="form-control" id="email_2" name="email_2"
                            value="{{ old('email_2') }}"
                            placeholder="Insira o email_2 principal
                            ">
                        @error('email_2')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_3">Email_3</label>
                        <input type="email_3" class="form-control" id="email_3" name="email_3"
                            value="{{ old('email_3') }}"
                            placeholder="Insira o email_3 principal
                            ">
                        @error('email_3')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="uf">UF</label>
                        <input type="uf" class="form-control" id="uf" name="uf"
                            value="{{ old('uf') }}" placeholder="Insira o uf principal
                            ">
                        @error('uf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="empresas_ligadas">Empresas Ligadas</label>
                        <input type="empresas_ligadas" class="form-control" id="empresas_ligadas"
                            name="empresas_ligadas" value="{{ old('empresas_ligadas') }}"
                            placeholder="Insira as Empresas Ligadas
                            ">
                        @error('empresas_ligadas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cnpj_empresa_ligada">CNPJ Empresas Ligadas</label>
                        <input type="cnpj_empresa_ligada" class="form-control" id="cnpj_empresa_ligada"
                            name="cnpj_empresa_ligada" value="{{ old('cnpj_empresa_ligada') }}"
                            placeholder="Insira o CNPJ Empresas Ligadas
                            ">
                        @error('cnpj_empresa_ligada')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="avanttodatab_id">Ligação Avantto</label>
                        <input type="avanttodatab_id" class="form-control" id="avanttodatab_id" name="avanttodatab_id"
                            value="{{ old('avanttodatab_id') }}"
                            placeholder="Insira as Empresas Ligadas
                            ">
                        @error('avanttodatab_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
