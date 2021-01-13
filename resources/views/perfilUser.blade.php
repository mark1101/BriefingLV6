@extends('layouts.geral')

@section('content')

    <body style="background-image: url({{asset('img/Background1.png')}})">

    <div class="card" style="margin-top: 3%">
        <div class="card-header">
            Dados de Login
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp"
                           placeholder="{{Auth::user()->name}}">

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1"
                           placeholder="{{Auth::user()->email}}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar alterações</button>
            </form>
        </div>
    </div>

    <div class="card" style="margin-top: 3%">
        <div class="card-header">
            Meu Perfil
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento</label>
                    <b><label for="nascimento">{{Auth::user()->dataNascimento}}</label></b>
                </div>
                <div class="form-group">
                    <label for="entrada">Data de Entrada</label>
                    <b><label for="entrada">{{Auth::user()->dataEntrada}}</label></b>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <b><label style="text-transform: uppercase" for="cargo">{{Auth::user()->funcionario}}</label></b>
                </div>
                <div class="form-group">
                    <label for="cargo">Nível</label>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="3"
                             aria-valuemin="0" aria-valuemax="10">3
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </body>

@endsection
