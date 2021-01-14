@extends('layouts.geral')




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Semana', 'Pontos', ],
            ['Semana 1',  15],
            ['Semana 2',  20],
            ['Semana 3',  5],
            ['Semana 4',  7]
        ]);

        var options = {
            title: 'Pontuacao mensal',
            curveType: 'function',
            legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>

@section('content')

    <body style="background-color: #faf4f4">

    <h3><a href="{{route('indexClienteInfo')}}" style="margin-top: 5%">Voltar</a></h3>

        <div class="row" style="margin-top: 3%">
            <div class="col-sm-4">
                <div class="container">
                    <div class="row">
                    <h2>Adicionar Peça</h2>
                    <span>Clique aqui para criar uma nova peça. Crie com atencao para que nao tenhamos problemas com relação</span>
                    <h1></h1>
                    <button id="criar" name="criar" type="button" class="btn btn-danger btn-lg" style = "border-radius: 50% ; margin-top: 3%" data-toggle="modal" data-target="#modalExemplo" >+</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 align-self-end">
                <div class="card" style="border-color: transparent ; background-image: linear-gradient(to right bottom, #01c0b5, #1ae0a3) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white">Pontuação</h5>
                        <h2 class="card-text" style="color: white">CADASTRADA</h2>
                        <p style="font-size: 25px ; color: white">190 <sup>pontos</sup></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card " style="border-color: transparent ; background-image: linear-gradient(to right bottom, #FF5400, #e6a686) ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white">Saldo</h5>
                        <h2 class="card-text" style="color: white">DISPONÍVEL</h2>
                        <p style="font-size: 25px ; color: white" >190 <sup>pontos</sup></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center" style="margin-top: 3% ; -webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.3);
            -moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.3);
            box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.3);">
            <div class="card-body">
                <h5 class="card-title">Movimentos</h5>
            </div>
            <div class="card-body">
                <div id="curve_chart" style="width: 100%; height: 250px"></div>
            </div>
        </div>

        <h3 style="margin-top: 3%">Historico de Créditos</h3>
        <div class="table-responsive-sm" style="margin-top: 1% ; margin-bottom: 10%">
            <table class="table" style="border: 1px solid gray; background-color: white">
                <thead>
                <tr>
                    <th scope="col">Mês</th>
                    <th scope="col">Campanha</th>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Peça</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Observação</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- MODAL DE CADASTRO DE PECA -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <h2 style="color: #FF5400 ; margin-top: 5% ; font-family: Lucida Console, Courier New, monospace" class="text-center">Adicionar Nova Peça</h2>
                    <div class="modal-body">
                        <form style="margin-left: 3% ; margin-right: 3%">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <select id="inputState" class="inputFino col-md-12">
                                        <option>Categoria</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <select id="inputState" class="inputFino col-md-12">
                                        <option>Peça</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="inputFino" id="inputEmail4" placeholder="ID" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="inputFino" id="inputPassword4" placeholder="Valor" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="inputFino col-md-12" id="inputAddress2" placeholder="Observacoes">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>



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
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <!-- <script>
        $(document).ready(function () {
            $("#criar").click();
        })
    </script> -->

@endsection
