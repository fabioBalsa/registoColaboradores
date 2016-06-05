<!DOCTYPE html>
<html lang="pt-pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
    
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/round-about.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
                <a class="navbar-brand" href="{{ action('employeeController@index') }}">Todos os Colaboradores</a>
                <a class="navbar-brand" href="{{ action('employeeController@create') }}">Adicionar novo colaborador</a>
                <div class="navbar-right">
                    @if (Auth::guest())
                        <a class="navbar-brand" href="{{ url('/login') }}">Entrar</a>
                        <a class="navbar-brand" href="{{ url('/register') }}">Registar</a>
                    @else
                        <a class="navbar-brand" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sair</a>
                    @endif
                </div>
        </div>
    </nav>

    <div class="container">
        
        @yield('conteudo')
        
    <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Colaboradores 2016</p>
                </div>
            </div>
        </footer>

    </div>
    
</body>

</html>

