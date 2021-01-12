@extends('layouts.geral')

@section('content')
    <h3 style="margin-top: 3%">Atividade</h3>
    <div class="card-deck" style="margin-top: 2%">
        <div class="card"
             style="background-image: linear-gradient(to bottom right, #603fb9 , #a68fe8) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title">Informacoes</h4>
                <h2 class="card-text">BASICAS</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)">
                <a href="{{route('indexClienteInfo')}}" style="color: white ; font-size: 15px">Ver mais</a>
            </div>
        </div>
        <div class="card"
             style="background-image: linear-gradient(to bottom right, #FF5400 , #dea98f) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title">Pontuacao</h4>
                <h2 class="card-text">DISPONIVEL</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)">
                <a href="###" style="color: white; font-size: 15px">Ver mais</a>
            </div>
        </div>
        <div class="card"
             style="background-image: linear-gradient(to bottom right, #01c0b5 , #1ae0a3) ; border-bottom: white ; border-right: white">
            <div class="card-body" style="color: white">
                <h4 class="card-title">Briefing</h4>
                <h2 class="card-text">CADASTRADOS</h2>
                <h2 class="card-text">80</h2>
            </div>
            <div class="card-footer" style="text-align: center ; background-color: rgba(166, 166, 166, 0.39)">
                <a href="###" style="color: white; font-size: 15px">Ver mais</a>
            </div>
        </div>
    </div>


    <h3 style="margin-top: 3%">Movimentos</h3>
    <!-- CARDS SEGUNDO -->
    <div class="card-deck" style="margin-top: 2%">
        <div class="card">
            <div class="card-body">
                <div id="chart_div" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
        <div class="card">
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
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"></th>
                        <td>Ronaldinho Eventos</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"></th>
                        <td>Ronaldinho LTDA</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="{{asset('img/ronaldinho2.png')}}" style="border-radius: 50%"></th>
                        <td>MKT Ronaldinho</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
