@extends('layouts.geral')

@section('content')
    <body style="background-color: #f2f2f2">

    <div class="col containerMargin" style="margin-top: 5%">
        <form class="form-inline">
            <div class="form-group col-md-10">
                <h2 style="font-size: 300%" class="column">Clientes</h2>
            </div>
            <button style="float:  right  ; background-color: #603fb9 ; color: white" type="button" class="btn"><a
                    href="{{ route('indexClienteCadastro') }}" style="color: white">Cadastrar Cliente</a></button>
        </form>



        <form id="filters" name="filters" style="margin-bottom: 4%" action="{{route('buscaActive')}}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control col-form-label-lg" placeholder="Nome do Cliente">
                </div>
                <input type="hidden" name="filterValues" id="filterValues">

                <button data-id="ativos" data-checked="false" type="button"
                        class="filter-btn btn btn-teal espacoBotao">
                    Ativos
                </button>

                <button data-id="naoativo" data-checked="false" type="button"
                        class="filter-btn btn btn-teal espacoBotao">
                    Inativos
                </button>
                <button type="submit" id="pesquisa" class="btn btn-success espacoBotao">
                    Pesquisar
                </button>
            </div>

        </form>

            <table class="table table-striped" style="margin-top: 2% ; background-color: white ; border-radius: 8px">
                <thead>
                <tr>
                    <th scope="col">Clientes</th>
                    <th scope="col">Categoria </th>
                    <th scope="col">Pontos Contratado </th>
                    <th scope="col">Pontos Atualizado</th>
                    <th scope="col">Cadastrado em </th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $c)
                    <tr>
                        <td>{{$c->name}}</td>
                        <td>{{$c->service}}</td>
                        <td>{{$c->points_hired}}</td>
                        <td>{{$c->points}}</td>
                        <td>{{$c->created_at->format("d-m-Y H:i")}}</td>
                        @if($c->active == "1")
                            <td><button class="btn btn-success align-content-center" style="border-radius: 50% "></button></td>
                        @endif
                        @if($c->active == "2")
                            <td><button class="btn btn-danger align-content-center" style="border-radius: 50% "></button></td>
                        @endif

                        @if($c->active == "2")
                            <td>
                                <button type="submit" name = "delete" id="delete" class="btn" style="background-color: #603fb9 ; color: white" ><a href="{{route('active' , ['id' => $c->id])}}">Reativar</a></button>
                            </td>
                        @endif
                        @if($c->active == "1")
                            <td>
                                <button type="submit" name = "delete" id="delete" class="btn" style="background-color: #603fb9 ; color: white" ><a href="{{route('active' , ['id' => $c->id] )}}">Desativar</a></button>                            </td>
                        @endif
                        <td>
                            <button type="submit" class="btn " data-toggle="modal" data-target="#modalUpdate"style="background-color: #603fb9 ; color: white">Editar</button>
                        </td>
                        <td>
                            <button type="submit" class="btn " style="background-color: #603fb9 ; color: white"><a class="car" href="{{route('indexClienteInfo', ['name' => $c->name])}}">Visualizar</a>
                            </button>
                        </td>
                    </tr>

                    <!-- Modal delete -->
                    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apagar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Deseja mesmo apagar o cliente {{$c->name}} ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger float-left" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary">Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Update-->
                    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        Editando Cliente {{$c->name}}
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
    </div>

    <style>
        .espacoBotao{
            margin-right: 2%;
        }
        .car , a:hover{
            color: white;
        }
    </style
@endsection



    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>

    <script>
        $(document).ready(function () {
            var selectedFilters = [];
            $('.filter-btn').on('click', function () {

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




