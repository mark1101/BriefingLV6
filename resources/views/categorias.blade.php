@extends('layouts.geral')

@section('content')

    <form class="form-inline"  style="margin-top: 3%">
        <div class="form-group col-md-8">
            <h2>Tabela de Categorias</h2>

        </div>
        <button data-toggle="modal" data-target="#exampleModal" style="float:  right  ; background-color: #603fb9 ; color: white ; margin-right: 3px" type="button" class="btn">Cadastrar Categoria</button>
        <button style="float:  right  ; background-color: #603fb9 ; color: white" type="button" class="btn"><a
                href="{{route('indexPontos')}}" style="color: white">Ver Pecas</a></button>
    </form>

        <table class="table table-striped" style="margin-top: 3%">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cat as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td><a href="">edt</a></td>
                    <td><a href="">del</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{route('cadatroCategoria')}}">
                        @csrf
                        <div class="form-group">
                            <label for="nomaCategoria">Nome da Categoria</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <small id="smallcat" class="form-text text-muted">Use nomes claros para criacao da categoria</small>
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
