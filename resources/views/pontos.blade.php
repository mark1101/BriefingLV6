@extends('layouts.geral')

@section('content')

    <form class="form-inline"  style="margin-top: 3%">
        <div class="form-group col-md-8">
            <h1>Tabela de Pontos</h1>
        </div>
        <button data-toggle="modal" data-target="#exampleModal" style="float:  right  ; background-color: #603fb9 ; color: white ; margin-right: 3px"  type="button" class="btn">Cadastrar Peca</button>
        <button style="background-color: #603fb9 ; color: white" type="button" class="btn"><a
                href="{{route('indexCategoria')}}" style="color: white">Ver Categorias</a></button>
    </form>

    <form id="filters" name="filters" action="{{route('buscaPontos')}}" method="POST">
        @csrf
        <label class="bmd-label-floating">Escolha somente uma opção de busca</label>
        <br>
        <input type="hidden" name="filterValues" id="filterValues">

        <button data-id="jornal" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Anuncio Para Jornal
        </button>

        <button data-id="revista" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Anuncio Para Revista
        </button>

        <button data-id="midia" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Mídia Exterior
        </button>

        <button data-id="prod" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Producao Eletronica
        </button>

        <button data-id="materias" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Materias Promocionais
        </button>

        <button data-id="papelaria" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Papelaria
        </button>

        <button data-id="projetos" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Projetos Especiais
        </button>

        <button data-id="trabalhos" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Trabalhos Para Avaliacao
        </button>

        <button id = "botao" data-id="programacao" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Programacao Visual
        </button>

        <button data-id="fachada" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Fachada
        </button>

        <button data-id="embalagens" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Embalagens
        </button>

        <button data-id="servicos" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Servicoes de Web e Multimídia
        </button>

        <button data-id="marketing" data-checked="false" type="button"
                class="filter-btn btn btn-teal espacoBotao">
            Marketing Digital
        </button>

        <button type="submit" id="pesquisa" class="btn btn-success espacoBotao">
            Pesquisar
        </button>
    </form>




@if($erro == "")
        <table class="table table-striped" style="margin-top: 3%">
            <thead>
            <tr>
                <th scope="col">Categoria</th>
                <th scope="col">Nome</th>
                <th scope="col">Valor</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($pecas as $p)
                <tr>
                    <th scope="row">{{($p->categoria)->name}}</th>
                    <td>{{$p->name}}</td>
                    <td>{{$p->value}}</td>
                    <td>
                        <button type="submit" class="btn " data-toggle="modal" data-target="#modalUpdate{{$p->id}}"style="background-color: #603fb9 ; color: white">Editar</button>
                    </td>
                    <td>
                        <button type="submit" name = "delete" id="delete" class="btn" style="background-color: #603fb9 ; color: white" data-toggle="modal" data-target="#modalDelete{{$p->id}}">Apagar</button>
                    </td>
                </tr>


                <!-- Modal delete -->
                <div class="modal fade" id="modalDelete{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Deseja mesmo apagar a peca {{$p->name}} ?</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Update-->
                <div class="modal fade" id="modalUpdate{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edicao de Peca</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <form>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nome</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPassword" value="{{$p->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Valor</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputPassword" value="{{$p->value}}">
                                            </div>
                                        </div>
                                    </form>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Salvar Alteracoes</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
@endif
    @if($erro == "Erro")
        <h3>Erro na pesquisa</h3>
    @endif

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="post" action="{{route('cadastrapeca')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome da nova peca</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="value">Valor</label>
                            <input type="text" class="form-control" id="value" name="value">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria da peca</label>
                            <select class="form-control" id="id_category" name="id_category">
                                @foreach($categorias as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button style="margin-top: 10px" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button style="margin-top: 10px" type="submit" class="btn btn-primary float-right   ">Cadastrar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>

    <script>
        $(document).ready(function () {
            var selectedFilters = [];
            $('.filter-btn').on('click', function () {

                //$('#filters').submit();

                var clickedButton = $(this);
                var checked = !Boolean(clickedButton.data('checked'));
                clickedButton.data('checked', checked);
                var dataId = clickedButton.data('id');
                clickedButton.toggleClass("btn-info");
                clickedButton.toggleClass("btn-danger");
                if (!selectedFilters.includes(dataId) && checked) {
                    selectedFilters.push(dataId);
                } else {
                    const index = selectedFilters.indexOf(dataId);
                    if (index > -1) {
                        selectedFilters.splice(index, 1);
                    }
                }
                var formattedFilters = selectedFilters.join(",");
                $('#filterValues').val(formattedFilters);

            });
        });
    </script>

    <style>
    .espacoBotao{
        margin-top: 1%;
    }
    </style>

@endsection

