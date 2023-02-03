@extends('template.master')

@section('main_title')
    Edite a Aeronave
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edite a Aeronave</h3>
            </div>
            <form action="/planeindex/{{ $edit->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" value="{{ $edit->marca }}"
                            placeholder="Insira a marca da Aeronave">
                        @error('marca')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $edit->modelo }}"
                            placeholder="Insira o modelo da Aeronave">
                        @error('modelo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ano_fabricacao">Ano de Fabricação</label>
                        <input type="text" class="form-control" id="ano_fabricacao" name="ano_fabricacao"
                            value="{{ $edit->ano_fabricacao }}" placeholder="Insira o ano de fabricação">
                        @error('ano_fabricacao')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="proprietario">Proprietário</label>
                        <input type="text" class="form-control" id="proprietario" name="proprietario"
                            value="{{ $edit->proprietario }}" placeholder="Insira o Proprietário">
                        @error('proprietario')
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
