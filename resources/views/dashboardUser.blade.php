@extends('layouts.geral')

@section('content')
    <body style="background-image: url({{asset('img/Background1.png')}})">
    <div class="row" style="margin-top: 1%">
        <div class="col-sm-3 align-self-start">
            <div class="card segundo" style="border-color: transparent ; background-image: linear-gradient(to right bottom, #6241ba, #a696ce) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                <div class="card-body">
                    <h5 class="card-title" style="color: white">Clientes</h5>
                    <h2 class="card-text" style="color: white">CADASTRADOS</h2>
                    <p style="font-size: 25px ; color: white">{{$totalClientes}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 align-self-end">
            <div class="card segundo" style="border-color: transparent ; background-image: linear-gradient(to right bottom, #01c0b5, #1ae0a3) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                <div class="card-body">
                    <h5 class="card-title" style="color: white">Funcionários</h5>
                    <h2 class="card-text" style="color: white">CADASTRADOS</h2>
                    <p style="font-size: 25px ; color: white">{{$totalFuncionarios}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card segundo " style="border-color: transparent ; background-image: linear-gradient(to right bottom, #FF5400, #e6a686) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                <div class="card-body">
                    <h2 class="card-title" style="color: white">{{$totalCategorias}} Categorias Cadastradas</h2>
                    <h2 class="card-text" style="color: white"><sup>com {{$totalPecas}} pecas total</sup></h2>
                </div>
            </div>
        </div>
    </div>
    </body>


    <style>

        .card:hover{

        }
    </style>
@endsection
