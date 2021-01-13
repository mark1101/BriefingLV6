@extends('layouts.geral')

@section('content')

    <body style="background-image: url({{asset('img/Background1.png')}})">
    <div class="card card-2" style="margin-top: 2% ; border-radius: 10px ; margin-right: 3% ; margin-left: 3%">
        <div class="card-body">
            <h2 class="text-center" style="color: #FF5400">Cadastro de Cliente</h2>
            <h5 class="text-center" style="color: grey ">Informacoes básicas</h5>
            <form style="margin-left: 7% ; margin-right: 7%" class="form">
                <div class="form-row" style="margin-top: 4%">
                    <div class="form-group col-md-6 col align-self-start">
                        <label class="form-label" for="first">Nome da empresa ou marca</label>
                        <input id="empresa" name="empresa" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6 col align-self-end">
                        <label class="form-label" for="first">WhatsApp ou Telegram</label>
                        <input id="whats" name="whats" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="first">Nome completo do responsável</label>
                        <input id="nomeCompleto" name="nomeCompleto" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="first">Endereco de E-mail</label>
                        <input id="email" name="email" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="first">Telefone empresarial</label>
                        <input id="telEmpresarial" name="telEmpresarial" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="first">CNPJ</label>
                        <input id="cnpj" name="cnpj" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label" for="first">Endereco completo</label>
                        <input id="endCompleto" name="endCompleto" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-label" for="first">Pontos</label>
                        <input id="pontos" name="pontos" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-label" for="first">Fundado em </label>
                        <input id="fundado" name="fundado" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-3" style="margin-left: 3%">
                        <h5 style="color: #999">Tipo de trabalho</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                   value="opcao1">
                            <label style="color: #999" class="form-check-label" for="exampleRadios1">
                                Job
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                   value="opcao2">
                            <label style="color: #999" class="form-check-label" for="exampleRadios2">
                                Assessoria On
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                   value="option3">
                            <label style="color: #999" class="form-check-label" for="exampleRadios3">
                                Assessoria Off
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <h5 style="color: #999">Logo da empresa</h5>
                        <input type="file" class="" style="border-color: transparent" name="documento" id="documento">
                    </div>
                    <div class="form-group col-md-3" style="margin-top: 3% ; alignment: right">
                        <button type="button" class="btn btn-lg" style="color: white ; background-color: #FF5400">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    </body>

    <style>
        .inputFino {
            border: none;
            background-color: transparent;
            color: black;
            font-weight: 500;
            font-size: 16px;
            margin-right: 0px;
            outline: none;
            margin: 0;
            width: 80%;
            padding: 10px 0;
            margin-bottom: 32px;
            border-bottom: 1px solid #e5e5e5;
        }

        .form-group {
            position: relative;

        &
        + .form-group {
            margin-top: 30px;
        }

        }

        .form-label {
            position: absolute;
            left: 0;
            top: 10px;
            color: #999;
            background-color: #fff;
            z-index: 10;
            transition: transform 150ms ease-out, font-size 150ms ease-out;
        }

        .focused .form-label {
            transform: translateY(-125%);
            font-size: .75em;
        }

        .form-input {
            position: relative;
            padding: 10px 0px 5px 0;
            margin-bottom: 4%;
            width: 100%;
            outline: 0;
            margin-top: 3%;
            border: 0;
            box-shadow: 0 1px 0 0 #e5e5e5;
            transition: box-shadow 150ms ease-out;

        &
        :focus {
            box-shadow: 0 2px 0 0 blue;
        }

        }

        .form-input.filled {
            box-shadow: 0 2px 0 0 #FF5400;
        }


    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>

    <script>
        $('input').focus(function () {
            $(this).parents('.form-group').addClass('focused');
        });

        $('input').blur(function () {
            var inputValue = $(this).val();
            if (inputValue == "") {
                $(this).removeClass('filled');
                $(this).parents('.form-group').removeClass('focused');
            } else {
                $(this).addClass('filled');
            }
        })
    </script>





@endsection
