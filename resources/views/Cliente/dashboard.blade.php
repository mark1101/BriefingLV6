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
    <a href="#"><i style="margin-left: 25% ; font-size: 50px"class="material-icons">dashboard</i></a>
    <a href="##"><i style="margin-left: 25% ; font-size: 50px" class="material-icons">supervisor_account</i></a>
    <a href="###"> <i style="margin-left: 25% ; font-size:  50px"class="material-icons">settings</i></a>

</div>

<div class="content">

    <h3 style="margin-top: 3%">Atividade</h3>
    <div class="card-deck" style="margin-top: 2%">
        <div class="card" style="background-image: linear-gradient(to bottom right, #603fb9 , #a68fe8) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title" >Informacoes</h4>
                <h2 class="card-text">BASICAS</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)" >
                <a href="{{route('indexClienteInfo')}}" style="color: white ; font-size: 15px">Ver mais</a>
            </div>
        </div>
        <div class="card" style="background-image: linear-gradient(to bottom right, #FF5400 , #dea98f) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title" >Pontuacao</h4>
                <h2 class="card-text">DISPONIVEL</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)" >
                <a href="###" style="color: white; font-size: 15px">Ver mais</a>
            </div>
        </div>
        <div class="card" style="background-image: linear-gradient(to bottom right, #01c0b5 , #1ae0a3) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title" >Briefing</h4>
                <h2 class="card-text">CADASTRADOS</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)" >
                <a href="###" style="color: white; font-size: 15px">Ver mais</a>
            </div>
        </div>
    </div>


    <h3 style="margin-top: 3%">Movimentos</h3>
    <!-- CARDS SEGUNDO -->
    <div class="card-deck" style="margin-top: 2%">
        <div class="card" >
            <div class="card-body" >
                <div id="chart_div" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
        <div class="card" >
            <div class="card-body">
                <h3>Historico de Creditos</h3>
                <br>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"> </th>
                        <td>Ronaldinho Eventos</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"> </th>
                        <td>Ronaldinho LTDA</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"> </th>
                        <td>MKT Ronaldinho</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
