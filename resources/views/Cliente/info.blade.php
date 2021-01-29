@extends('layouts.geral')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Data', 'Pontos', ],
            @foreach($historico as $h)
             ['.' , {{$h->value}}],
            @endforeach
        ]);

        var options = {
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>


@section('content')

    <body style="background-color: #faf4f4">

    <div class="row" style="margin-top: 3%">
        <h1>Cliente {{$cliente->name}}</h1>
    </div>

        <div class="row" style="margin-top: 1%">
            <div class="col-sm-3 align-self-start">
                <div class="card" style="border-color: transparent ; background-image: linear-gradient(to right bottom, #6241ba, #a696ce) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white">informacoes</h5>
                        <h2 class="card-text" style="color: white">BÁSICAS</h2>
                        <p style="font-size: 25px ; color: white">20 <sup>dados</sup></p>
                    </div>
                    <div class="card-footer text-center">
                        <a class="corLink" href="#">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 align-self-end">
                <div class="card" style="border-color: transparent ; background-image: linear-gradient(to right bottom, #01c0b5, #1ae0a3) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white">Pontuação</h5>
                        <h2 class="card-text" style="color: white">DISPONÍVEL</h2>
                        <p style="font-size: 25px ; color: white">{{$cliente->points}} <sup>pontos</sup></p>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col align-self-start text-center">
                                <a class="corLink" href="{{route('indexCreditos' , ['name' => $cliente->name])}}">Visualizar</a>
                            </div>
                            <div class="linha-vertical">
                            </div>
                            <div class="col align-self-end text-center">
                                <a class="corLink" data-toggle="modal" href="#modalExemplo">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card " style="border-color: transparent ; background-image: linear-gradient(to right bottom, #FF5400, #e6a686) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white">Briefing</h5>
                        <h2 class="card-text" style="color: white">CADASTRADOS</h2>
                        <p style="font-size: 25px ; color: white" >{{$briefings}} <sup>briefings</sup></p>
                    </div>
                    <div class="card-footer ">
                            <div class="row">
                                <div class="col align-self-start text-center">
                                    <a class="corLink" data-toggle="modal" href="#modal1">Cadastrar</a>
                                </div>
                                <div class="linha-vertical">
                                </div>
                                <div class="col align-self-end text-center">
                                    <a class="corLink" data-toggle="modal" href="#modal2">Ver mais</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-6">
                <div class="card text-center" style=" -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.3);
                    -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
                    box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                        <div class="card-body">
                            <h5 class="card-title">Movimentos</h5>
                        </div>
                        <div class="card-body">
                            <div id="curve_chart" style="width: 100%; height: 250px"></div>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center" style="-webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.3);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-header">
                        <h5 class="card-title">Histórico de créditos</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" style="height: 250px; width: 100% ; overflow: auto">
                            <thead>
                            <tr>
                                <th scope="col">Valor</th>
                                <th scope="col">Peca</th>
                                <th scope="col">Cadastrado por:</th>
                                <th scope="col">Data</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($historico as $h)
                                <tr>
                                    <th>{{$h->value}}</th>
                                    <td>{{($h->peca)->name}}</td>
                                    <td>{{($h->funcionario)->name}}</td>
                                    <td>{{$h->created_at->format("d/m/Y")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <h1 style="margin-top: 3%; margin-bottom: 10%">Imagens do Instagram</h1>

        <!-- MODAL OPCAO DE CADASTRO DE BRIEFING -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 40px">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="text-center" style="margin-top: 3% ; margin-bottom: 3%">
                        <h2 style="color: #603fb9">Selecione o briefing que deseja cadastrar</h2>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <button type="button" class="btn btn-danger espacamentoBotao"><a href="{{route('indexGeral' , ['name' => $cliente->name])}}">Geral</a></button>
                                <button type="button" class="btn btn-danger espacamentoBotao"><a href="{{route('indexContaAnuncio' , ['name' => $cliente->name])}}">
                                        Criação de Conta Anúncio
                                    </a></button>
                                <button type="button" class="btn btn-danger espacamentoBotao" disabled>Campanha Digital Facebook</button>
                                <button type="button" class="btn btn-danger espacamentoBotao" disabled>Campanha Digital Google</button>
                                <button type="button" class="btn btn-danger espacamentoBotao" disabled>Páginas Site</button>
                                <button type="button" class="btn btn-danger espacamentoBotao" disabled>Job</button>
                                <button type="button" class="btn btn-danger espacamentoBotao" disabled>Descricao Cliente</button>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 10%">
                    </div>
                </div>
            </div>
        </div>

    <!-- MODAL OPCAO DE VISU BRIEFING -->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="border-radius: 40px">
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content">
                <div class="text-center" style="margin-top: 3% ; margin-bottom: 3%">
                    <h2 style="color: #603fb9">Selecione o briefing que deseja ver</h2>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            @if($temGeral > 0)
                                <button type="button" class="btn btn-danger espacamentoBotao"><a href="{{route('veGeral' , ['name' => $cliente->name])}}">Geral</a></button>
                            @endif
                            @if($temAnuncio > 0)
                                <button type="button" class="btn btn-danger espacamentoBotao"><a href="{{route('indexContaAnuncio' , ['name' => $cliente->name])}}">Criação de Conta Anúncio</a></button>
                                @endif
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 10%">
                </div>
            </div>
        </div>
    </div>

    </body>

    <!-- MODAL DE CADASTRO DE PECA -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <h2 style="color: #FF5400 ; margin-top: 5% ; font-family: Lucida Console, Courier New, monospace" class="text-center">Adicionar Nova Peça</h2>
                <div class="modal-body">
                    <form style="margin-left: 3% ; margin-right: 3%" method="post" action="{{route('subCredit' , ['id' => $cliente->id])}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <select id="categoria" name="categoria" class="inputFino col-md-12">
                                    <option>Selecione a categoria</option>
                                    @foreach($categorias as $c)
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <select id="piece_id" name="piece_id" class="inputFino col-md-12">
                                    <option>Selecione a peca</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="id_service" class="inputFino" id="inputEmail4" placeholder="ID" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="inputFino" id="valor" name="valor" placeholder="Valor" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="inputFino col-md-12" id="observation" name="observation" placeholder="Observacoes">
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success float-right">Salvar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <style>

        .inputFino{
            border: none;
            color: black;
            font-weight: 500;
            font-size: 16px;
            outline: none;
            margin: 0;
            padding: 20px 0px 10px 10px;
            margin-bottom: 32px;
            border-bottom: 1px solid #e5e5e5;
        }
        .corLink{
            color: white;
        }

        a:hover{
            color: white;
        }

        .linha-vertical {
            height: 20px;/*Altura da linha*/
            border-left: 2px solid;/* Adiciona borda esquerda na div como ser fosse uma linha.*/
            border-color: white;
        }

        .espacamentoBotao{
            margin-top: 2%;
            margin-left: 2%;
            width: 30%;
            white-space: normal;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $('select[name="categoria"]').on('change', function () {

                var categoria_id = $(this).val(); //Pega o id da categoria

                $.ajax({
                    url: "{{route('buscaPeca',['id' => '_valor_'])}}".replace('_valor_', categoria_id),
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        if (response.success === true) {
                            //$('select[name=peca]').empty();
                            $.each(response.data, function (item, value) {
                                $('select[name=piece_id]').append('<option value="' + response.data[item]["id"] + '">' + response.data[item]["name"] + '</option>');;
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
            $('select[name="piece_id"]').on('change', function () {

                var peca_id = $(this).val(); //Pega o id da categoria

                $.ajax({
                    url: "{{route('buscaValorPeca',['id' => '_valor_'])}}".replace('_valor_', peca_id),
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        if (response.success === true) {
                            //$('select[name=peca]').empty();
                            $.each(response.data, function (item, value) {
                                $('#valor').val(response.data[item]["value"]);
                            });
                        } else {
                            console.log('n deu ');
                        }
                    }
                })
            });
        });
    </script>

@endsection


