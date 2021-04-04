@extends('layout.layout')

@section('conteudo')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                @if(isset( $register->id ))
                    <h2>Editar usuário</h2>
                @else
                    <h2>Criar usuário</h2>
                @endif
            </div>
            <div class="col-md-4">
                @if(isset($register->id))
                    <form action="{{route('user.update', $register->id)}}" method="post" enctype="multipart/form-data">
                        @else
                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                @endif

                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="@if(isset($register->id)) {{ $register->name }} @endif">
                                    <div id="emailHelp" class="form-text">Informe o nome.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="@if(isset($register->id)) {{ $register->email }} @endif">
                                    <div id="emailHelp" class="form-text">Informe o Email.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Telefone</label>
                                    <input type="text" name="telefone" class="form-control" id="exampleInputPassword1" value="@if(isset($register->id)) {{ $register->telefone }} @endif">
                                </div>
                                @if(isset($register->id))
                                    <button type="submit" class="btn btn-danger">Alterar</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                @endif
                            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection
