@extends('layouts.geral')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2013',  1000,      400],
            ['2014',  1170,      460],
            ['2015',  660,       1120],
            ['2016',  1030,      540]
        ]);

        var options = {
            title: 'Company Performance',
            hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>


@section('content')

    <body style="background-color: #faf4f4">

        <h3 style="margin-top: 3%">Atividade</h3>
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
                        <p style="font-size: 25px ; color: white">190 <sup>pontos</sup></p>
                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col align-self-start text-center">
                                <a class="corLink" href="#">Visualizar</a>
                            </div>
                            <div class="linha-vertical">
                            </div>
                            <div class="col align-self-end text-center">
                                <a class="corLink" href="{{route('indexCreditos')}}">Cadastrar</a>
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
                        <p style="font-size: 25px ; color: white" >190 <sup>pontos</sup></p>
                    </div>
                    <div class="card-footer ">
                            <div class="row">
                                <div class="col align-self-start text-center">
                                    <a class="corLink" data-toggle="modal" href="#modal1">Cadastrar</a>
                                </div>
                                <div class="linha-vertical">
                                </div>
                                <div class="col align-self-end text-center">
                                    <a class="corLink" href="#">Ver mais</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-8">
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
            <div class="col-md-4">
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
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <h1 style="margin-top: 3%; margin-bottom: 10%">Imagens do Instagram</h1>

        <!-- Modal -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="text-center" style="margin-top: 3% ; margin-bottom: 3%">
                        <h2 style="color: #603fb9">Selecione o briefing que deseja cadastrar</h2>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <button type="button" class="btn btn-danger espacamentoBotao"><a href="{{route('indexAnuncio')}}">Criacao Contas Anúncio</a></button>
                                <button type="button" class="btn btn-danger espacamentoBotao">Campanha Digital Facebook</button>
                                <button type="button" class="btn btn-danger espacamentoBotao">Campanha Digital Google</button>
                                <button type="button" class="btn btn-danger espacamentoBotao">Páginas Site</button>
                                <button type="button" class="btn btn-danger espacamentoBotao">Job</button>
                                <button type="button" class="btn btn-danger espacamentoBotao">Descricao Cliente</button>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom: 10%">
                    </div>
                </div>
            </div>
        </div>

    </body>

    <style>
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


@endsection
