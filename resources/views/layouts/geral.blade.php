<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Hey Briefing</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css"
          href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons')}}"/>

</head>

<body>

<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                           style="color: black ; float: right" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<div class="sidenav">
    <a href="{{route('inicio')}}">
        <div class="redondo">
            <img style="  margin-top: 5%;
        border-radius: 50%;
        display: block;
        margin-left: auto;
        margin-right: auto" src="{{asset('img/perfil.jpeg')}}">
        </div>
        <div class="d-flex w-100">
                    <span class="menu-collapsed"
                          style="text-transform: uppercase ;  margin-right: auto ; margin-left: auto ; display: block ; color: white ; margin-bottom: 9% ; margin-top: 3%">{{ Auth::user()->name}}</span>
        </div>
        <HR WIDTH=100%>
    </a>
    <a href="{{route('inicio')}}">
        <span class="material-icons">home</span>
        <span class="menu-collapsed">Inicio</span>
    </a>
    <a href="{{route('perfilUser')}}">
        <span class="material-icons">account_circle</span>
        <span class="menu-collapsed">Meu Perfil</span>
    </a>
    <a href="{{route('indexClienteShow')}}">
        <span class="material-icons">supervisor_account</span>
        <span class="menu-collapsed">Clientes</span>
    </a>
    <a href="#contact">
        <span class="material-icons">cached</span>
        <span class="menu-collapsed">Configuracao</span>
    </a>
</div>

<div class="main containerMargin">

    @yield('content')

</div><!-- Main Col END -->

<div class="">

</div>

<style>
    body {
        font-family: "Lato", sans-serif;
        margin-bottom: 5%;
    }

    .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #603fb9;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #babfbc;
        margin-left: 5px;
        display: block;
    }

    .sidenav a:hover {
        color: whitesmoke;
    }

    .main {
        margin-left: 240px; /* Same as the width of the sidenav */
        margin-right: 40px;
    }

    .fixarRodape {
        bottom: 0;
        position: fixed;
        width: 100%;
        text-align: center;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }
</style>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>
</html>
