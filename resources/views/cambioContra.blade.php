@extends('inicio')
@section('content')
<div class="row">
<div class="col-4">
    <div class="card" style="width: 18rem;">
  <div class="card-header" style="background-color:#30475e;color:white;">
  Acciones
  </div>
  <ul class="list-group list-group-flush">
    <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
    <li class="list-group-item"><a href="{{url('/verPerfil')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/verPedidos')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis pedidos</a></li>
    <li class="list-group-item"><a href="{{url('/modificarForm')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Modificar mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/cambioContras')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Cambiar contraseña</a></li>
    <li class="list-group-item"><a href="{{url('/verDarBaja')}}" type="submit" class="btn mt-2" style="background-color:white;color:#30475e;">Darme de baja</a></li>
    </ul>
</div>
</div>
<div class="col-6" style="margin-top:50px;">
<img  width="100px" height="100px" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/cambiocontra.png"/>
<!-- tabla de los datos de pepito-->
    <label style="font-size:24px;color:#30475e;"><strong>Cambiemos tu contraseña {{auth()->user()->name}}</strong></label>
    
    <form method="POST" action="{{url('/cambiarC')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    
    <p style="margin-left:150px;"><strong>Nueva contraseña:</strong></p><input style="margin-left:150px;" type="password" id="nuevaContra" name="nuevaContra" />
    <br><br>
    <button type="submit" class="btn mt-1 " style="margin-left:150px;background-color:#ba6b57;color:white;">Cambiar contraseña</button>
      
        <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
    </form>    
</div>
<!-- acciones para pepito -->
</div>

@endsection