@extends('layouts.geral')


@section('content')

    <body style="background-color: #f2f2f2">

    <div class="card" style="margin-top: 2% ; padding: 3px 30px 10px 30px">
            <h1 style="text-align: center ; margin-top: 2% ; margin-bottom: 3%">Briefing Geral </h1>
        <div class="row" style="justify-content: center">
            <a href="#social" data-toggle="modal" style="margin-top: 2% ;  margin-right: 2%"><img src="{{asset('img/social.png')}}"></a>
            <a href="#concorrentes" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/concorrentes.png')}}"></a>
            <a href="#design" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/design.png')}}"></a>
            <a href="#historia" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/historia.png')}}"></a>
            <a href="#objetivos" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/objetivos.png')}}"></a>
            <a href="#proposito" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/proposito.png')}}"></a>
            <a href="#publico" data-toggle="modal" style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/publico.png')}}"></a>
            <a href="#servicos" data-toggle="modal"  style="margin-top: 2% ; margin-right: 2%"><img src="{{asset('img/servicos.png')}}"></a>
            <h2 style="margin-bottom: 10% ; margin-top: 5%"></h2>
        </div>
        <h2 style="text-align: center">Compartilhar Briefing</h2>
        <div class="col-md-4 mb-3 align-self-center">
            <label for="validationDefaultUsername">Url</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">©</span>
                </div>
                <input type="text" class="form-control" value="/cliente/visualizacao-briefing/mostraGeral/{{$c->name}}" aria-describedby="">
            </div>
        </div>
    </div>

    </body>

@endsection

<!-- Redes Sociais -->
<div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">REDES SOCIAIS</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">

                <label for="exampleFormControlInput1" class="fontUsa">Instagram</label>
                <p class="tamanhoP">     {{$cliente->instagram}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Facebook</label>
                <p class="tamanhoP">{{$cliente->facebook}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Site</label>
                <p class="tamanhoP">{{$cliente->site}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Youtube</label>
                <p class="tamanhoP">{{$cliente->youtube}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Blog</label>
                <p class="tamanhoP">{{$cliente->blog}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">TikTok</label>
                <p class="tamanhoP">{{$cliente->tiktok}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Palavras Chave (hashtags mais usadas)</label>
                <p class="tamanhoP">{{$cliente->source}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Concorrentes -->
<div class="modal fade" id="concorrentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">CONCORRENTES</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Concorrentes Diretos</label>
                <p class="tamanhoP">{{$cliente->competitionD}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Concorrentes Indiretos</label>
                <p class="tamanhoP">{{$cliente->competitionI}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Desafios</label>
                <p class="tamanhoP">{{$cliente->challenge}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!-- Design -->
<div class="modal fade" id="design" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">DESIGN</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Cor Principal</label>
                <br>
                <span class="badge badge-pill badge-light" style="background-color: {{$c->color}}">{{$c->color}}</span>
                <br>
                <br>
                <br>
                <label for="exampleFormControlInput1" class="fontUsa">Slogan</label>
                <p class="tamanhoP">{{$cliente->challenge}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Historia -->
<div class="modal fade" id="historia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">HISTÓRIA</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">História</label>
                <p class="tamanhoP">{{$cliente->history}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Origem do Nome</label>
                <p class="tamanhoP">{{$cliente->origem}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Fundacao</label>
                <p class="tamanhoP">{{$c->fundation}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Objetivos -->
<div class="modal fade" id="objetivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">OBJETIVOS</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Objetivos Gerais</label>
                <p class="tamanhoP">{{$cliente->objetive}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Metas</label>
                <p class="tamanhoP">{{$cliente->meta}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Proposito -->
<div class="modal fade" id="proposito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">PROPÓSITOS</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Propósito Geral</label>
                <p class="tamanhoP">{{$cliente->proposito}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Missão</label>
                <p class="tamanhoP">{{$cliente->mission}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Visão e Valores</label>
                <p class="tamanhoP">{{$cliente->vision}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Publico Alvo -->
<div class="modal fade" id="publico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">PUBLÍCO ALVO</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Sexo</label>
                <p class="tamanhoP">{{$cliente->sex}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Formacao</label>
                <p class="tamanhoP">{{$cliente->formation}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Classe Social</label>
                <p class="tamanhoP">{{$cliente->class}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Localizacao</label>
                <p class="tamanhoP">{{$cliente->location}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Poder Aquisitivo</label>
                <p class="tamanhoP">{{$cliente->power}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Hábitos de Consumo</label>
                <p class="tamanhoP">{{$cliente->habits}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Persona</label>
                <p class="tamanhoP">{{$cliente->persona}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Servicos -->
<div class="modal fade" id="servicos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 150% ; border-radius: 20px">
            <div class="modal-header align-self-center">
                <h2 class="modal-title " id="exampleModalLabel" style=" font-family: Lucida Console, Courier, monospace;">SERVICOS E PRODUTOS</h2>
            </div>
            <div class="modal-body" style="padding: 40px 40px 40px 40px">
                <label for="exampleFormControlInput1" class="fontUsa">Servicos e Produtos</label>
                <p class="tamanhoP">{{$cliente->services}}</p>
                <label for="exampleFormControlInput1" class="fontUsa">Diferencial Competitivo</label>
                <p class="tamanhoP">{{$cliente->differential}}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-lg" style="background-color: #FF5400 ; color: white" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<style>

    .card:hover{
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    .fontUsa{
        font-family: Lucida Console, Courier, monospace;
        font-size: 20px;
        color: #FF5400;
    }
    .tamanhoP{
        font-size: 20px;
    }
    .modal-content{
        width: 150%;
        border-radius: 30px;
    }
    </style>

