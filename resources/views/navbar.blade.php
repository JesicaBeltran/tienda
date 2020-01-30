
      
<div class="container-fluid">
<div class="row">
  <div class="col-12">
        
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <img id="logo" src="http://localhost/mi-proyecto-laravel/tienda/public/imagenes/logo.png" class="d-inline-block align-top" width="120" height="70">
    <a class="navbar-brand" href="{{url('/')}}">Inicio</a>
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
        <div class="form-inline md-form mt-0">
        <input class="form-control mr-sm-2" type="text"  placeholder="Search" aria-label="Search">
        <input type="button" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
        </div>
        <div>
        <img id="logo" src="http://localhost/mi-proyecto-laravel/tienda/public/imagenes/carrito.png" class="d-inline-block align-top" width="35" height="35">
        <a href="{{ url('/inicioSesion') }}"><img id="user" src="http://localhost/mi-proyecto-laravel/tienda/public/imagenes/usuario.png" class="d-inline-block align-top" width="35" height="35"></a>
        </div>
    
      </div>
  </nav>
  <div>

</div>
</div>

