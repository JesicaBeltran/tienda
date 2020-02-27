    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <img id="logo" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/logo.png" class="d-inline-block align-top" width="110" height="60">
    <a class="navbar-brand" style="font-size:20px;" href="{{url('/')}}">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       <ul class="navbar-nav mr-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Productos</a>
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          @foreach($categorias as $categoria)
          <a class="dropdown-item" href="{{ url('/tablaProductosCategoria/'.$categoria->id) }}">{{$categoria->nombre}}</a>
          @endforeach
        </div>
        </li>
        </ul>
        
        <div>
          <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
         
          ({{$total}})  <a href="{{ url('/verCarrito') }}"><img id="logo" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/carrito.png" class="d-inline-block align-top" width="25" height="25"></a>
        @guest
        <a href="{{ url('/home') }}"><img id="user" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/usuario.png" class="d-inline-block align-top" width="25" height="25"/></a>
        
        @else
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" style="margin-right:5px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Hola {{auth()->user()->name}}!</a>
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url ('/verPerfil') }}" style="margin-right:5px;" aria-haspopup="true" aria-expanded="false" >Ver perfil</a>
          <a class="dropdown-item" href="{{ route ('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit()";>Cerrar sesion</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            {{csrf_field()}}        
            </form>
        </div>
        </li>
        </ul>
        
        <div>
        @endguest
        </div>
    
      </div>
  </nav>
  <div>


