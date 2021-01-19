@extends('layouts.geral')

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

@section('content')
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-11 col-md-11 col-lg-11 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Cadastro de Briefing Geral!</strong></h2>
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
                                    <li id="setima"><strong></strong></li>
                                    <li id="oitava"><strong></strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <br>
                                        <h5 style="color: black"><b>Instagram</b></h5>
                                        <input type="text" name="instagram" placeholder=""/>
                                        <br>
                                        <h5 style="color: black"><b>Facebook</b></h5>
                                        <input type="text" name="facebook" placeholder=""/>
                                        <br>
                                        <h5 style="color: black"><b>Site</b></h5>
                                        <input type="text" name="site" placeholder=""/>
                                        <h5 style="color: black"><b>Twitter</b></h5>
                                        <input type="text" name="twitter" placeholder=""/>
                                        <h5 style="color: black"><b>Youtube</b></h5>
                                        <input type="text" name="youtube" placeholder=""/>
                                        <h5 style="color: black"><b>Blog</b></h5>
                                        <input type="text" name="blog" placeholder=""/>
                                        <h5 style="color: black"><b>TikTok</b></h5>
                                        <input type="text" name="tiktok" placeholder=""/>
                                        <h5 style="color: black"><b>Palavras-chave (Hashtags mais usadas da área)</b></h5>
                                        <textarea type="text" name="source" placeholder=""></textarea>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h5 style="color: black"><b>História</b></h5>
                                        <textarea type="text" name="history" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Origem do nome</b></h5>
                                        <input type="text" name="origem" placeholder=""/>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <h5 style="color: black"><b>Sexo</b></h5>
                                                <select class="form-control" name="sex">
                                                    <option>Homem</option>
                                                    <option>Mulher</option>
                                                    <option>Home e Mulher</option>
                                                </select>
                                            </div>
                                            <div class="col-3 float-right">
                                                <h5 style="color: black"><b>Formação Educacional</b></h5>
                                                <select class="form-control" name="formation">
                                                    <option>Formacao Básica</option>
                                                    <option>Formacao Técnica</option>
                                                    <option>Formacao Superior</option>
                                                </select>
                                            </div>
                                            <div class="col-3 float-right">
                                                <h5 style="color: black"><b>Classe Social</b></h5>
                                                <select class="form-control" name="class">
                                                    <option>Classe A: mais de 15 salários mínimos</option>
                                                    <option>Classe B: de 5 a 15 salários mínimos</option>
                                                    <option>Classe C: de 3 a 5 salários mínimos</option>
                                                    <option>Classe D: de 1 a 3 salários mínimos</option>
                                                    <option>Classe E: até 1 salário mínimo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h5 style="color: black"><b>Localização</b></h5>
                                        <input type="text" name="location" placeholder="">
                                        <h5 style="color: black"><b>Idade</b></h5>
                                        <input type="text" name="age" placeholder="Ex: 10 - 20">
                                        <h5 style="color: black"><b>Poder Aquisitivo</b></h5>
                                        <input type="text" name="power" placeholder="Ex: 10.000 - 14.000">
                                        <h5 style="color: black"><b>Hábitos de Consumo</b></h5>
                                        <textarea type="text" name="habits" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Resumo / informações Adicionais</b></h5>
                                        <textarea type="text" name="resume" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Descreva uma persona</b></h5>
                                        <textarea type="text" name="persona" placeholder=""></textarea>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h5 style="color: black"><b>Serviços/Produtos: (Qual a sua empresa oferecerá?
                                                Que soluções eles trazem aos clientes?)</b></h5>
                                        <textarea type="text" name="services" placeholder=""></textarea>
                                        <br>
                                        <h5 style="color: black"><b>Qual o principal diferencial/atributo/proposta de
                                                valor que deverá ser comunicado. O que diferencia esse produto/serviço
                                                da concorrência. Oque faz ser único?</b></h5>
                                        <textarea type="text" name="differential" placeholder=""></textarea>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h5 style="color: black"><b>Propósito Geral</b></h5>
                                        <textarea type="text" name="proposito" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Missão - Propósito</b></h5>
                                        <textarea type="text" name="mission" placeholder=""></textarea>

                                        <h5 style="color: black"><b>Missão</b></h5>
                                        <textarea type="text" name="mission" placeholder=""></textarea>
                                        <br>
                                        <h5 style="color: black"><b>Visão e Valores da Empresa</b></h5>
                                        <textarea type="text" name="vision" placeholder=""></textarea>
                                        <br>
                                        <h5 style="color: black"><b>Slogan</b></h5>
                                        <textarea type="text" name="slogan" placeholder=""></textarea>
                                        <br>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h5 style="color: black"><b>Objetivo</b></h5>
                                        <textarea type="text" name="objetive" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Meta</b></h5>
                                        <textarea type="text" name="meta" placeholder=""></textarea>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h5 style="color: black"><b>Concorrência direta:</b></h5>
                                        <textarea type="text" name="competitionD" placeholder=""></textarea>
                                        <h5 style="color: black"><b>Concorrência indireta:</b></h5>
                                        <textarea type="text" name="competitionI" placeholder=""></textarea>
                                        <br>
                                        <h5 style="color: black"><b>Desafios</b></h5>
                                        <textarea type="text" name="challenge" placeholder=""></textarea>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
                                    <input type="button" name="next" class="next action-button" value="Próximo"/>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Successo, todos os dados foram registrados
                                            !</h2> <br><br>
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
                                    <input type="button" name="previous" class="previous action-button-previous"
                                           value="Anterior"/>
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
            width: 13%;
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

        #progressbar #setima:before {
            font-family: FontAwesome;
            content: "7"
        }
        #progressbar #oitava:before {
            font-family: FontAwesome;
            content: "8"
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
                                $('select[name=city_id]').append('<option value="' + response.data[item]["id"] + '">' + response.data[item]["name"] + '</option>');
                                ;
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
