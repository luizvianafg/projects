@extends('template.master')

@section('main_title')
    Adicione uma aeronave
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Adicione uma aeronave</h3>
            </div>
            <form action="/planeindex" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}"
                            placeholder="Insira a marca da Aeronave">
                        @error('marca')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo') }}"
                            placeholder="Insira o modelo da aeronave">
                        @error('modelo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ano_fabricacao">Ano de Fabricação</label>
                        <input type="text" class="form-control" id="ano_fabricacao" name="ano_fabricacao"
                            value="{{ old('ano_fabricacao') }}" placeholder="Selecione o ano de fabricação">
                        @error('ano_fabricacao')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proprietario">Proprietário</label>
                        <input type="text" class="form-control" id="proprietario" name="proprietario"
                            value="{{ old('proprietario') }}" placeholder="Insira o proprietario">
                        @error('proprietario')
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
