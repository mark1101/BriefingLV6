@extends('layouts.geral')

@section('content')

    <body style="background-color: #f2f2f2">

    <div class="col containerMargin" style="margin-top: 5%">
        <form class="form-inline">
            <div class="form-group col-md-10">
                <h2 style="font-size: 300%" class="column">Funcionários</h2>
            </div>
            <button style="float:  right  ; background-color: #603fb9 ; color: white" type="button" class="btn"><a
                    href="#" style="color: white">Cadastrar Funcionário</a></button>
        </form>

        <table class="table table-striped" style="margin-top: 2% ; background-color: white ; border-radius: 8px">
            <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email </th>
                <th scope="col">Data de Nascimento </th>
                <th scope="col">Data de Entrada</th>
                <th scope="col">Cargo</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($funcionarios as $f)
                <tr>
                    <td>{{$f->name}}</td>
                    <td>{{$f->email}}</td>
                    <td>{{$f->dataNascimento}}</td>
                    <td>{{$f->dataEntrada}}</td>
                    <td>{{$f->funcionario}}</td>
                    <td></td>

                    <td>
                        <button type="submit" class="btn " data-toggle="modal" data-target="#modalUpdate{{$f->id}}"style="background-color: #603fb9 ; color: white">Editar</button>
                    </td>
                    <td>
                        <button type="submit" class="btn " data-toggle="modal" data-target="#modalDelete{{$f->id}}" style="background-color: #603fb9 ; color: white">Deletar</button>
                    </td>
                   <!-- <td>
                        <button type="submit" class="btn " data-toggle="modal" data-target="#modalVisu"style="background-color: #603fb9 ; color: white"><a class="car" >Visualizar</a>
                        </button>
                    </td> -->
                </tr>

                <!-- Modal delete -->
                <div class="modal fade" id="modalDelete{{$f->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Deseja mesmo apagar o funcionário {{$f->name}} ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Update-->
                <div class="modal fade" id="modalUpdate{{$f->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edicao de Cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    Editando o funcionário {{$f->name}}
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Salvar Alteracoes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Visu-->
                <div class="modal fade" id="modalVisu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <h2 style="color: #FF5400 ; margin-top: 5% ; margin-bottom: 3%; font-family: Lucida Console, Courier New, monospace" class="text-center">Dados do funcionário</h2>
                                    <p>Nome : {{$f->name}}</p>
                                    <p>Cargo : {{$f->funcionario}}</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

            </tbody>
        </table>
    </div>


@endsection
