@extends('layouts.geral')

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" >

@section('content')
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-11 col-md-11 col-lg-11 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>HEY! Aqui vai o Brief</strong></h2>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="{{route('cadastroGeral' , ['id' => $cliente->id])}}" method="post">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="primeira"><strong></strong></li>
                                    <li id="segunda"><strong></strong></li>
                                    <li id="terceira"><strong></strong></li>
                                    <li id="quarta"><strong></strong></li>
                                    <li id="quinta"><strong></strong></li>
                                    <li id="sexta"><strong></strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Cliente</h2>
                                        <input type="text" class="" value="{{$cliente->name}}" disabled/>
                                        <h2 class="fs-title">Resumo</h2>
                                        <textarea type="text" name="resume"
                                                  placeholder="Escrever de forma breve, oque se trata o Briefing"></textarea>
                                        <h2 class="fs-title">Oque precisa ser feito</h2>
                                        <textarea type="text" name="to_do"
                                                  placeholder="EX: Criacao de contas de anúncio / Facebook e Google "></textarea>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <br>
                                        <h5 style="color: black"><b>Instagram</b></h5>
                                        <input type="text" name="insta_login" placeholder="Login"/>
                                        <input type="text" name="insta_pass" placeholder="Senha"/>
                                        <br>
                                        <h5 style="color: black"><b>Facebook</b></h5>
                                        <input type="text" name="face_login" placeholder="Login"/>
                                        <input type="text" name="face_pass" placeholder="Senha"/>
                                        <br>
                                        <h5 style="color: black"><b>Google</b></h5>
                                        <input type="text" name="google_login" placeholder="Login"/>
                                        <input type="text" name="google_pass" placeholder="Senha"/>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Upload de RG</h2>
                                        <h4>RG do responsável pelo perfil, frente e verso</h4>
                                        <div class="row">
                                            <input type="file" style="margin-top: 5%" name="rg_responsible" id="rg">
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Dados Essenciais</h2>
                                        <p>É de suma importância que todos os dados digitados estejam corretos!</p>
                                        <!-- <p align="center">Login e senha das plataformas pessoal para anúncio</p>
                                        <p align="center">(IMPORTANTE: Não tem como anunciar se a pessoa não passar o
                                            Facebook com o login e a senha para criar a conta )</p> -->
                                        <br>
                                        <h5 style="color: black"><b>CNPJ</b></h5>
                                        <input type="text" name="cnpj" placeholder=""/>
                                        <br>
                                        <h5 style="color: black"><b>Razão Social</b></h5>
                                        <input type="text" name="social_reason" placeholder=""/>
                                        <br>
                                        <h5 style="color: black"><b>Endereço</b></h5>
                                        <input type="text" name="address" placeholder=""/>
                                        <h5 style="color: black"><b>Telefone</b></h5>
                                        <input type="text" name="tel" placeholder=""/>
                                        <h5 style="color: black"><b>Email Comercial</b></h5>
                                        <input type="text" name="email" placeholder=""/>
                                        <h5 style="color: black"><b>Senha Email</b></h5>
                                        <input type="text" name="email_pass"
                                               placeholder="Não obrigatório, somente se o cliente quiser"/>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Preferência de Pagamento</h2>
                                        <p align="justify">IMPORTANTE! Boleto leva até 3 dias para compensar. Cartão de
                                            crédito são pagamento automáticos,
                                            o facebook vai cobrando em média por dia de acordo com o gasto. No Google
                                            existe a opção de pagamento
                                            por boleto e cartão. No caso do cartão os pagamentos podem ser automáticos.
                                            Conforme o Google vai gastando,
                                            ou adicionar um valor de saldo que é cobrado inteiro no cartão</p>
                                        <br>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="" name="payment_preference" value="cartao de credito">
                                            <label class="form-check-label" for="inlineCheckbox2">Cartão de Crédito</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="" name="payment_preference" value="cartao de credito">
                                            <label class="form-check-label" for="inlineCheckbox2">Cartão de Crédito</label>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Successo, todos os dados foram registrados !</h2> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"><img
                                                    src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image"></div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-success">Enviar os Dados</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            height: 100%
        }

        #grad1 {
            background-color:: #81D4FA;
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;
            position: relative
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid #603fb9;

            outline-width: 0
        }
        /* Acima isso aqui :  border-bottom: 2px solid skyblue; */

        #msform .action-button {
            width: 100px;
            background: #603fb9;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #603fb9
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
        }

        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px
        }

        select.list-dt:focus {
            border-bottom: 2px solid #603fb9
        }

        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left
        }

        #progressbar {
            margin-bottom: 15px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #000000
        }

        /* ALTERA DISTANCIA ENTRE OS ELEMENTOS */
        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 15%;
            float: left;
            position: relative
        }

        #progressbar #primeira:before {
            font-family: FontAwesome;
            content: "1"
        }
        #progressbar #segunda:before {
            font-family: FontAwesome;
            content: "2"
        }
        #progressbar #terceira:before {
            font-family: FontAwesome;
            content: "3"
        }
        #progressbar #quarta:before {
              font-family: FontAwesome;
              content: "4"
        }
        #progressbar #quinta:before {
            font-family: FontAwesome;
            content: "5"
        }
        #progressbar #sexta:before {
            font-family: FontAwesome;
            content: "6"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #603fb9
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>

@endsection
