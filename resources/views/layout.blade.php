<!--estructura del home-->
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
                    <a href="{{ url('/listar') }}">Buscador</a>
                   <a href="{{ url('/inicioSesion') }}">Iniciar Sesion</a>
                   <a href="{{ url('/registrar') }}">Registrarse</a>
                   <a href="{{ url('/carrito') }}">Ver carrito</a>
        @show
    
        <div class="container">
            @yield('tabla')
        </div>

        <div class="container">
            @yield('content')
        </div>
       
        

    </body>
</html>