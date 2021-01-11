<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Hey Briefing</title>
    <link rel="icon" type="image/png" href="{{asset('img/logoAba.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}"/>


</head>
<style>
    body {
        margin: 0;
        font-family: "Lato", sans-serif;
    }
    .sidebar {
        margin: 0;
        padding: 0;
        width: 150px;
        background-color: #603fb9;
        position: fixed;
        height: 100%;
        overflow: auto;
    }
    .sidebar a {
        display: block;
        color: white;
        padding: 30px 30px 30px 30px;
        text-decoration: none;
        font-size: large;
    }
    .sidebar  h1{
        font-size: medium;
        display: block;
        margin-left: auto;
        margin-right: auto;
        color: white;
    }
    .sidebar  h2{
        font-size: xx-large;
        display: block;
        margin-left: auto;
        margin-right: auto;
        color: white;
    }
    .sidebar a.active {
        background-color: #4CAF50;
        color: white;
    }
    .sidebar a:hover:not(.active) {
        background-color: #5d2be4;
        color: white;
    }
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }
    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
    }
    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
</style>
<body>


<div class="sidebar">
    <img src="{{asset('img/grecameno.png')}}" style="display: block ; margin-right: auto ; margin-left: auto ; border-radius: 50% ; margin-top: 10% ; margin-bottom: 5%">
    <h1 align="center" style="font-weight: bold">Nome usuario</h1>
    <h1 align="center" style="margin-bottom: 3% ; font-weight: 100;">CARGO</h1>
    <h1 align="center" style="margin-bottom: 15%">____________________</h1>


    <button style=" width: 90% ; height: 6% ;  color: white;  margin-left: 5%; margin-right: 5% ;  margin-bottom: 10% ; background-color: #f15722" type="button" class="btn btn-transparent " >Criar novo</button>
    <a href="{{route('inicio')}}"><i style="margin-left: 25% ; font-size: 50px"class="material-icons">dashboard</i></a>
    <a href="##" class="active"><i style="margin-left: 25% ; font-size: 50px" class="material-icons">supervisor_account</i></a>
    <a href="###"> <i style="margin-left: 25% ; font-size:  50px"class="material-icons">settings</i></a>

</div>

<div class="content">
    <div class="container" style="margin-top: 7%">


        <form class="form-inline">
            <div class="form-group col-md-10">
                <h2 style="font-size: 300%" class="column">Clientes</h2>
            </div>
            <button style="float:  right  ; background-color: #603fb9 ; color: white" type="button" class="btn"><a href="{{ route('indexClienteCadastro') }}" style="color: white">Cadastrar Cliente</a></button>
        </form>

        <input class="form-control form-control-lg" type="search" placeholder="Pesquisar cliente" aria-label="Search" style="margin-top: 2%" >
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
                <td >Dal Pozzo</td>
                <td>Assessoria</td>
                <td>27/11/2020 - Ana Paula</td>
                <td><button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Apagar</button></td>
                <td><button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Editar</button></td>
                <td><button type="submit" class="btn " style="background-color: #603fb9 ; color: white">Visualizar</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
