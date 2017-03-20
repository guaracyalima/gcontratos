<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gContratos</title>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{--<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->--}}
    {{--<!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->--}}
    <![endif]-->
    <script src="https://use.fontawesome.com/b09c9f3252.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">gContratos</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin.home.index') }}">Home</a></li>
                {{--<li><a href="{{ route('admin.carnes.index') }}">Carnês</a></li>--}}
                <li><a href="{{ route('admin.produtos.index') }}">Produtos</a></li>
                <li><a href="{{ route('admin.clientes.index') }}">Clientes</a></li>
                {{--<li><a href="{{ route('admin.pagamentos.index') }}">Formas de pagamento</a></li>--}}
                <li><a href="{{ route('admin.contratos.index') }}" disabled="">Contratos</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.despesas.index') }}">Despesas</a></li>
                        <li><a href="{{ route('admin.receitas.index') }}">Receitas</a></li>
                        <li><a href="#"></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.categorias.index') }}">Categorias de despesas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Ponto de equilibrio</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relatorios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('admin.relatorios.index') }}">Este mes</a></li>
                        <li><a href="{{ route('admin.receitas.index') }}">Anual</a></li>
                        <li><a href="{{ route('admin.receitas.index') }}">Receitas</a></li>
                        <li><a href="#"></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.categorias.index') }}">Categorias de despesas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Ponto de equilibrio</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(auth()->guest())
                    @if(!Request::is('auth/login'))
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                    @endif
                    @if(!Request::is('auth/register'))
                        <li><a href="{{ url('/auth/register') }}">Register</a></li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
<script src="{{asset('js/angular.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/cep.js') }}"></script>
<script src="{{ asset('js/buscaCarne.js') }}"></script>

<script src="http://irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>
{{--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>--}}

@yield('post-script')
</body>
</html>
