@extends('layouts.geral')


@section('content')

    <body style="background-color: #f2f2f2">

    <div class="card" style="margin-top: 2% ; padding: 3px 30px 10px 30px">
            <h1 style="text-align: center ; margin-top: 2% ; margin-bottom: 3%">Briefing Geral </h1>
        <div class="row" style="justify-content: center">
            <a href="#" style="margin-top: 2% ;  margin-right: 2%"><img src="{{asset('img/social.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/concorrentes.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/design.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/historia.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/objetivos.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/proposito.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/publico.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/servicos.png')}}"></a>
            <a href="#" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/social.png')}}"></a>
            <h2 style="margin-bottom: 10% ; margin-top: 5%"></h2>
        </div>
        <h2 style="text-align: center">Compartilhar Briefing</h2>
        <div class="col-md-4 mb-3 align-self-center">
            <label for="validationDefaultUsername">Url</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">$</span>
                </div>
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Url" aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
    </div>

    </body>

@endsection

<style>

    .card:hover{
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    </style>
