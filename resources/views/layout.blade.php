<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script>

</head>
<body>
<header>
    <?php function activeMenu($url)
    {
        return request()->is($url) ? 'active' : '';
    }

    ?>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{activeMenu('login')}}">
                        <a href="{{ route('login') }}">Inicio</a>
                    </li>
                    {{--<li class="{{activeMenu('createUser')}}">

                    </li>--}}
                    <li class="{{activeMenu('listaAlbaranes')}}">
                        <a href="{{ route('listaAlbaranes') }}">Albaranes de máquinas</a>
                    </li>

                    <li a class="{{activeMenu('createIncidencia')}}">
                        <a href="{{route('createIncidencia')}}">Incidencias</a>
                    </li>
                    {{--
                    <li class="{{activeMenu('mensajes/create')}}" >
                        <a href="{{ route('mensajes.create') }}">Contactos</a>
                    </li>
                    @if(auth()->check())
                        <li class="{{activeMenu('mensajes')}}"><a href="{{ route('mensajes.index') }}">Mensajes</a>
                        </li>
                        @if(auth()->user()->hasRoles(['admin']))

                            <li class="{{activeMenu('usuarios*')}}"><a href="{{ route('usuarios.index') }}">Usuarios</a>
                            </li>
                        @endif
                    @endif--}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                            @if(auth()->check())
                                {{auth()->user()->name}}
                            @else
                                Invitado
                            @endif
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @if(auth()->guest())
                                <li class="{{activeMenu('login')}}">
                                    <a href="{{ route('login') }}">Iniciar sesión</a>
                                </li>
                                <li class="{{activeMenu('register')}}">
                                    <a href="{{ route('register')  }}">Crear usuario</a>
                                </li>
                            @else
                                <li>
                                    {{--<a href="/logout" action="{{route("logout")}}" method="POST">Cerrar sesion</a>--}} 
                                    <form action="{{route("logout")}}" method="POST" style = "text-align: center;">                                                                         
                                        <input type="submit" value="Logout" class="btn btn-primary">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    @yield('contenido')
    <footer>Copyright {{date('Y')}}</footer>
</div>
<script src="/js/app.js"></script>

</body>
</html>
