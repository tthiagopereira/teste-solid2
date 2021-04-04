@extends('layout.layout')

@section('conteudo')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('user.create') }}" class="btn btn-success">Adicionar Usuário</a>
            </div>
            <div class="col-md-8 " >
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Contatos</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($register as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telefone }}</td>
                        <td>
                            <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info">Editar</a>
                            <a href="{{ route('user.destroy', $item->id) }}" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection


