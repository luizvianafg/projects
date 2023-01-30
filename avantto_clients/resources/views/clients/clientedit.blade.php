@extends('template.master')

@section('main_title')
    Edite o lead
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edite o lead</h3>
            </div>
            <form action="/clientindex/{{ $edit->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="nome_principal">Nome Principal</label>
                        <input type="text" class="form-control" id="nome_principal" name="nome_principal"
                            value="{{ $edit->nome_principal }}" placeholder="Insira o nome do cliente">
                        @error('nome_principal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ranking">Ranking</label>
                        <input type="text" class="form-control" id="ranking" name="ranking"
                            value="{{ $edit->ranking }}" placeholder="Insira o ranking do cliente">
                        @error('ranking')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="possivel_renda">Possivel Renda</label>
                        <input type="text" class="form-control" id="possivel_renda" name="possivel_renda"
                            value="{{ $edit->possivel_renda }}" placeholder="Selecione a renda do cliente">
                        @error('possivel_renda')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone"
                            value="{{ $edit->telefone_1 }}" placeholder="Insira o telefone principal">
                        @error('telefone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $edit->email_1 }}"
                            placeholder="Insira o email principal
                            ">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
