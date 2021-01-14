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



        <form id="filters" name="filters" >
            @csrf
            <input class="form-control form-control-lg" type="search" placeholder="Pesquisar cliente" aria-label="Search"
                   style="margin-top: 2% ; margin-bottom: 3%">
            <input type="hidden" name="filterValues" id="filterValues">

            <button data-id="jornal" data-checked="false" type="button"
                    class="filter-btn btn btn-teal espacoBotao">
                Ativos
            </button>

            <button data-id="revista" data-checked="false" type="button"
                    class="filter-btn btn btn-teal espacoBotao">
                Inativos
            </button>

            <button type="submit" id="pesquisa" class="btn btn-success espacoBotao">
                Pesquisar
            </button>
        </form>

        <table class="table table-striped" style="margin-top: 2% ; background-color: white ; border-radius: 8px">
            <thead>
            <tr>
                <th scope="col">Clientes</th>
                <th scope="col">Categoria </th>
                <th scope="col">Ultima modificacao</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Dal Pozzo</td>
                <td>Assessoria</td>
                <td>27/11/2020 - Ana Paula</td>
                <td>
                    <button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Apagar</button>
                </td>
                <td>
                    <button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Editar</button>
                </td>
                <td>
                    <button type="submit" class="btn " style="background-color: #603fb9 ; color: white"><a class="car" href="{{route('indexClienteInfo')}}">Visualizar</a>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <style>

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
