<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Hey Briefing</title>
    <link rel="icon" type="image/png" href="{{asset('img/logoAba.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body style="background-image: url({{asset('img/fundo.png')}}) ; background-repeat: no-repeat; background-position: right ; bottom: 0 ; overflow: auto;">
<!-- Conteúdo -->

<div class="sidebar">
    <img src="{{asset('img/grecameno.png')}}" style="display: block ; margin-right: auto ; margin-left: auto ; border-radius: 50% ; margin-top: 10% ; margin-bottom: 5%">
    <h1 align="center" style="font-weight: bold">Nome usuario</h1>
    <h1 align="center" style="margin-bottom: 3% ; font-weight: 100;">CARGO</h1>
    <h1 align="center" style="margin-bottom: 15%">____________________</h1>


    <button style=" width: 90% ; height: 6% ;  color: white;  margin-left: 5%; margin-right: 5% ;  margin-bottom: 10% ; background-color: #f15722" type="button" class="btn btn-transparent " >Criar novo</button>
    <a href="{{route('inicio')}}"><i style="margin-left: 25% ; font-size: 50px"class="material-icons">dashboard</i></a>
    <a href="##" class="active"><i style="margin-left: 25% ; font-size: 50px" class="material-icons">supervisor_account</i></a>
    <a href="###"> <i style="margin-left: 25% ; font-size:  50px"class="material-icons">settings</i></a>

</div>


<div class="container ajustcontainer" style="margin-top: 18%; margin-left: 5%">

    <p class="font-weight-bold" style="font-size: x-large ; color: #ff6456 ; letter-spacing: 5px">plataforna iterativa</p>
    <p class="font-weight-bold" style="font-size: xxx-large ;color: #ff6456 ">Para sua empresa</p>
    <div style="width: 55%">
        <p class="font-weight-light" align="justify">É por meio do briefing que conseguimos captar exatamente a
            ideia do projeto desejado pelo cliente, o objetivo, a mensagem a ser transmitida
            e qual resultado ele deseja alcancar. E foi pensando nisso que criamos o Briefing totalmente
            online e iterativo</p>
    </div>

    <br>
    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal" style=" padding: 25px ; background-image: linear-gradient(to right, #f4347b 0%, #ff6456 100%); color: white ; border-radius: 28px">COMECAR AGORA</button>
</div>

<!-- Modal -->
<div class="modal fade "  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container" style="align-items: center">
                    <p class="font-weight-bold" style="font-size: xx-large ; color: #205ce2 ; letter-spacing: 3px ; margin-top: 15% ; ">Login</p>
                </div>
                <div class="container">

                    <!-- FORMULARIO DE LOGIN -->
                    <form>
                        <div class="form-group">
                            <input type="text" style="border-radius: 10px" class="form-control form-control-lg" id="usuario" aria-describedby="emailHelp" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <input type="password" style="border-radius: 10px" class="form-control form-control-lg" id="senha" placeholder="Senha" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar meu Login</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 15px ; background-color: #205ce2 ; border-radius: 15px ; margin-bottom: 15%">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
