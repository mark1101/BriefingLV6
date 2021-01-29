<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Briefing Geral {{($data->cliente)->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <img src="/Applications/MAMP/htdocs/versao6/public/img/logoPDf.png">
    <h2 style="text-align: right">Briefing Geral Agência HEY!</h2>
</div>
<br>
<br>
<h2>Nome do Cliente: {{($data->cliente)->name}}</h2>
<br>
<h6 style="text-align: center">REDES SOCIAIS</h6>

<table class="table table-striped" style="font-size: 10px">
    <thead>
    <tr>
        <th scope="col">Rede</th>
        <th scope="col">Usuário</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>Instagram</th>
        <td>{{$data->instagram}}</td>
    </tr>
    <tr>
        <th>Facebook</th>
        <td>{{$data->facebook}}</td>
    </tr>
    <tr>
        <th>Site</th>
        <td>{{$data->site}}</td>
    </tr>
    <tr>
        <th>Youtube</th>
        <td>{{$data->youtube}}</td>
    </tr>
    <tr>
        <th>Blog</th>
        <td>{{$data->blog}}</td>
    </tr>
    <tr>
        <th>TikTok</th>
        <td>{{$data->tiktok}}</td>
    </tr>
    <tr>
        <th>Palavras Chaves</th>
        <td>{{$data->source}}</td>
    </tr>

    </tbody>
</table>

<br>
<h6 style="text-align: center">CONCORRENTES</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Diretos</th>
        <td>{{$data->competitionD}}</td>
    </tr>
    <tr>
        <th>Indiretos</th>
        <td>{{$data->competitionI}}</td>
    </tr>
    <tr>
        <th>Desafois</th>
        <td>{{$data->challenge}}</td>
    </tr>
    </tbody>
</table>

<br>
<h6 style="text-align: center">DESIGN</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Cor Principal</th>
        <td STYLE="background-color: {{$data->color}}">COR</td>
    </tr>
    <tr>
        <th>Slogan</th>
        <td>{{$data->slogan}}</td>
    </tr>
    </tbody>
</table>

<br>
<h6 style="text-align: center">HISTÓRIA</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>História</th>
        <td>{{$data->history}}</td>
    </tr>
    <tr>
        <th>Origem do nome</th>
        <td>{{$data->origem}}</td>
    </tr>
    <tr>
        <th>Fundacao</th>
        <td>{{($data->cliente)->fundation}}</td>
    </tr>
    </tbody>
</table>

<br>
<h6 style="text-align: center">OBJETIVOS</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Objetivos Gerais</th>
        <td>{{$data->objetive}}</td>
    </tr>
    <tr>
        <th>Metas</th>
        <td>{{$data->meta}}</td>
    </tr>
    </tbody>
</table>

<br>
<h6 style="text-align: center">PROPÓSITOS</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Propósito Geral</th>
        <td>{{$data->proposito}}</td>
    </tr>
    <tr>
        <th>Missão</th>
        <td>{{$data->mission}}</td>
    </tr>
    <tr>
        <th>Visão e Valores</th>
        <td>{{$data->vision}}</td>
    </tr>

    </tbody>
</table>

<br>
<h6 style="text-align: center">PÚBLICO ALVO</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Sexo</th>
        <td>{{$data->sex}}</td>
    </tr>
    <tr>
        <th>Formacao</th>
        <td>{{$data->formation}}</td>
    </tr>
    <tr>
        <th>Classe Social</th>
        <td>{{$data->class}}</td>
    </tr>
    <tr>
        <th>Localizacao</th>
        <td>{{$data->location}}</td>
    </tr>
    <tr>
        <th>Poder Aquisitivo</th>
        <td>{{$data->power}}</td>
    </tr>
    <tr>
        <th>Hábitos de Consumo</th>
        <td>{{$data->habits}}</td>
    </tr>
    <tr>
        <th>Persona</th>
        <td>{{$data->persona}}</td>
    </tr>

    </tbody>
</table>

<br>
<h6 style="text-align: center">SERVICOS E PRODUTOS</h6>

<table class="table table-striped" style="font-size: 10px">
    <tbody>
    <tr>
        <th>Servicos e Produtos</th>
        <td>{{$data->services}}</td>
    </tr>
    <tr>
        <th>Diferencial Competitivo</th>
        <td>{{$data->differential}}</td>
    </tr>
    </tbody>
</table>

<br>
<br>
<br>
<h3>Assinaturas:</h3>
<br>
<p>Cliente ______________________</p>
<p>Atendimento ______________________</p>
<br>
<p>Guarapuava ___ / ___ / ___</p>


</body>
</html>

<style>
    td{
        font-size: 12px;
    }
    th{
        font-size: 14px;
    }
    </style>
