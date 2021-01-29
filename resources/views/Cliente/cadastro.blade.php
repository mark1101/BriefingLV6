@extends('layouts.geral')

@section('content')

    <body style="background-color: #faf4f4">
    <div class="card card-2" style="margin-top: 1% ; border-radius: 10px ; margin-right: 10% ; margin-left: 10% ;-webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
        <div class="card-body">
            <h3 class="text-center" style="color: #FF5400">Cadastro de Cliente</h3>
            <form style="margin-left: 3% ; margin-right: 3%" class="form" action="{{route('createClient')}}" method="post">
                @csrf
                <div class="form-row" style="margin-top: 2%">
                    <div class="form-group col-md-6 col align-self-start">
                        <label class="form-label" for="first">Nome da empresa ou marca</label>
                        <input id="name" name="name" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6 col align-self-end">
                        <label class="form-label" for="firs t">WhatsApp ou Telegram</label>
                        <input id="whats" name="whats" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="first">Nome completo do responsável</label>
                        <input id="name_responsible" name="name_responsible" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label" for="first">Endereco de E-mail</label>
                        <input id="email" name="email" class="form-input" type="email"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="first">Telefone empresarial</label>
                        <input id="tel" name="tel" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label" for="first">CNPJ</label>
                        <input id="cnpj" name="cnpj" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-6">
                            <select id="state_id" name="state_id" class="inputFino col-md-12">
                                <option>Selecione o Estado</option>
                                @foreach($estados as $e)
                                    <option value="{{$e->id}}">{{$e->name}}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-grou col-md-6">
                            <select id="city_id" name="city_id" class="inputFino col-md-12">
                                <option>Selecione a Cidade</option>
                            </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label" for="first">Endereco completo</label>
                        <input id="address" name="address" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-label" for="first">Pontos</label>
                        <input id="points" name="points" class="form-input" type="number"/>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="form-label" for="first">Fundado em </label>
                        <input id="fundation" name="fundation" class="form-input" type="text"/>
                    </div>
                    <div class="form-group col-md-3" style="margin-left: 3%">
                        <h5 style="color: #999">Tipo de servico</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="check" id="check"
                                   value="Job">
                            <label style="color: #999" class="form-check-label" for="exampleRadios1">
                                Job
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="check" id="check"
                                   value="Assesoria on">
                            <label style="color: #999" class="form-check-label" for="exampleRadios2">
                                Assessoria On
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="check" id="check"
                                   value="Assessoria off">
                            <label style="color: #999" class="form-check-label" for="exampleRadios3">
                                Assessoria Off
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-2">
                        <h5 style="color: #999">Cor principal</h5>
                        <input type="color" class="" style="border-color: transparent ; width: 50% ; height: 50%" value="red" name="color" id="color">
                    </div>
                    <div class="form-group col-md-12">
                        <h5 style="color: #999">Logo da empresa</h5>
                        <input type="file" class="" style="border-color: transparent" name="logo" id="logo">
                    </div>
                    <div class="form-group col-md-3" style="margin-top: 3% ; alignment: right">
                        <button type="submit" class="btn btn-lg" style="color: white ; background-color: #FF5400">
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
            box-shadow: 0 2px 0 0 #f67232;
        }


    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $('select[name="state_id"]').on('change', function () {

                var categoria_id = $(this).val(); //Pega o id da categoria
                //console.log(estado_id);

                $.ajax({
                    url: "{{route('puxaCidade',['id' => '_valor_'])}}".replace('_valor_', categoria_id),
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        if (response.success === true) {
                            $('select[name=city_id]').empty();
                            $.each(response.data, function (item, value) {
                                $('select[name=city_id]').append('<option value="' + response.data[item]["id"] + '">' + response.data[item]["name"] + '</option>');;
                            });
                        } else {
                            console.log('n deu ');
                        }
                    }
                })
            });
        });
    </script>

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
