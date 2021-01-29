@extends('layouts.geral')


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Meses', 'Movimentos'],
            ["Janeiro", {{$janeiro}}],
            ["Fevereiro", {{$fevereiro}}],
            ["Março", {{$marco}}],
            ["Abril", {{$abril}}],
            ["Maio", {{$maio}}],
            ["Junho", {{$junho}}],
            ["Julho", {{$julho}}],
            ["Agosto", {{$agosto}}],
            ["Setembro", {{$setembro}}],
            ["Outubro", {{$outubro}}],
            ["Novembro", {{$novembro}}],
            ["Dezembro", {{$dezembro}}],
        ]);

        var options = {
            chart: {
                title: 'Movimento Mensal de {{$cliente->name}}',
                subtitle: 'Cliente cadastrado em {{$cliente->created_at->format("d-m-Y")}}',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

@section('content')

    <body style="background-color: #faf4f4">

    <h3><a href="#" style="margin-top: 5%">Voltar</a></h3>

        <div class="row"  style="margin-top: 3% ; margin-left: 12%">
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
                        <p style="font-size: 25px ; color: white">{{$cliente->points_hired}} <sup>pontos</sup></p>
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
                        <p style="font-size: 25px ; color: white" >{{$cliente->points}} <sup>pontos</sup></p>
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
                <div id="columnchart_material" style="width: 100%; height: 250px"></div>
            </div>
        </div>

        <h3 style="margin-top: 3%">Historico de Créditos</h3>
        <div class="table-responsive-sm" style="margin-top: 1% ; margin-bottom: 10%">
            <table class="table" style="border: 1px solid gray; background-color: white">
                <thead>
                <tr>
                    <th scope="col">Mês</th>
                    <th scope="col">ID</th>
                    <th scope="col">Peca</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Observação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($historico as $h)
                    <tr>
                        <th>{{$h->created_at->format("m")}}</th>
                        <td>{{$h->id_service}}</td>
                        <td>{{($h->peca)->name}}</td>
                        <td>{{$h->value}}</td>
                        <td>{{$h->observation}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

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

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function () {
            $('select[name="categoria"]').on('change', function () {

                var categoria_id = $(this).val(); //Pega o id da categoria
                //console.log(estado_id);

                $.ajax({
                    url: "{{route('buscaPeca',['id' => '_valor_'])}}".replace('_valor_', categoria_id),
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        if (response.success === true) {
                            $('select[name=piece_id]').empty();
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
