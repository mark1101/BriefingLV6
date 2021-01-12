@extends('layouts.geral')

@section('content')
    <div class="col containerMargin" style="margin-top: 5%">
        <form class="form-inline">
            <div class="form-group col-md-10">
                <h2 style="font-size: 300%" class="column">Clientes</h2>
            </div>
            <button style="float:  right  ; background-color: #603fb9 ; color: white" type="button" class="btn"><a
                    href="{{ route('indexClienteCadastro') }}" style="color: white">Cadastrar Cliente</a></button>
        </form>

        <input class="form-control form-control-lg" type="search" placeholder="Pesquisar cliente" aria-label="Search"
               style="margin-top: 2%">
        <nav aria-label="Navegação de página exemplo" style="margin-top: 5%;">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Todos Clientes</a></li>
                <li class="page-item"><a class="page-link" href="#">Ativos</a></li>
                <li class="page-item"><a class="page-link" href="#">Inativos</a></li>
            </ul>
        </nav>
        <table class="table table-striped" style="margin-top: 2%">
            <thead>
            <tr>
                <th scope="col">Clientes</th>
                <th scope="col">Servico</th>
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
                    <button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Visualizar
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
