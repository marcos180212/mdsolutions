<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('image/logo1.jpeg') }}">

    <title>{{ config('app.name', 'MD Solutions') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img id="logo" src="{{ asset('image/logo2.jpg') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                        @can('viewAny', App\Cliente::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes') }}" title="">Clientes</a>
                        </li>
                        @endcan
                        @can('viewAny', App\Fornecedor::class)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fornecedores') }}" title="">Fornecedores</a>
                        </li>
                        @endcan
                        @can('viewAny', \App\NotaFiscal::class)
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="">Nota Fiscal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="">Orçamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="">Configuração</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="">Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="">Admin</a>
                        </li>
			             @endcan
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a title="{{ ucwords(Auth::user()->name) }}" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ \Str::words(ucwords(Auth::user()->name), 1) }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			       	    <a class="dropdown-item" href="{{ route('admin') }}" title="">Configuracoes</a>
				    <div class="dropdown-divider"></div>
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

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <footer class="bg-dark text-center text-light">
        <div class="text-center p-3">
            © <?= date('Y') ?> Developed by - <a href="#" title="">Marcos Antonio</a>
        </div>
    </footer>
    @yield('javascript')
</body>
</html>
