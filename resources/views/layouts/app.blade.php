<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
<meta name="autores" content="Mateus, Luan H., Pedro Júlio e Samantha">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mensagens Lunares || @yield('titulo','LayoutPadrao')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|Mali|Space+Mono" rel="stylesheet"> 

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style media="screen">
     body{
       /*margin-bottom: 60px;  Margin bottom by footer height */
       /* margin: 0px 0px 150px 0px; */
       padding: 0;
       background-color: #162a3e;
       background-image: linear-gradient(90deg, #162a3e 16%, #b9bfc5 76%);
       font-family: 'Space Mono',monospace;
        font-family: 12px;
     }
     a{
       color: ;
       text-decoration: none;
     }
     a:hover{
       color:
     }
       
     #painel{
       text-align: center;
     }
     #mensagemlunar{ 
       color: #fff;
       padding: 5px;
       font-weight: bold;
       font-family: 'Bad Script',cursive;
     }
     #descr{
       /* color: #fff; */
       background-color: #fafafa;
       border-radius: 5px;
       padding: 3px;
       width: 55%;
       font-family: 'Space Mono',monospace;
       font-style: italic;
       font-size: 11px;
     }
     #formularios{
       width: 40%;
       padding: 8px;
       border-radius: 8px;
       background-color: #fafafa;
     }
     .container-fluid{
       /* background-color: #fafafa; */
       /* border-radius: 10px; */
       margin: auto;
       padding: 5px;
     }
    
     footer{
       /* background-color: #fafafa;
       opacity: 0.87;
       
       */
       text-align: center;
       padding: 10px;
       /* position: absolute; */
       /* bottom: 0; */
       width: 100%;
       /* height: 60px; /* Set the fixed height of the footer here */
       line-height: 60px; /* Vertically center the text there */
       background-color: #f5f5f5;
     }
     .moon{
       /* position: absolute; */
       position: absolute;
       top: 300px;
       left: 1100px;
       right: 0;
       bottom: 0;
       /* float: right; */
       z-index: -99999;
       margin: auto;
       width: 150px;
       height: 150px;
       border-radius: 50%;
       background: #fff;
       box-shadow: 0 0 50px 10px #fff
     }
     #informacao{
       width: 60%;
       text-align: justify;
       padding: 20px;
       border-radius: 3px;
       background-color: #fafafa;
     }
   </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  Mensagens Lunares
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/home" class="dropdown-item">Mensagem</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        <div class="container">
          <br>
          <div class="container-fluid" id="conteudo">
            @yield('conteudo','BEM VINDO A TELA DE LAYOUT PADRAO!')
          </div>
        </div>
    </div>
    <div class="moon">
      
    </div>
    <footer>Mensagens Lunares // 2018</footer>
    
</body>
</html>
