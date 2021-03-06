@extends('inicio')
@section('content')
<div class="row">
<div class="col-4">
    <div class="card" style="width: 18rem;">
  <div class="card-header" style="background-color:#30475e;color:white;">
  Acciones
  </div>
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item"><a href="{{url('/verPerfil')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/verPedidos')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis pedidos</a></li>
    <li class="list-group-item"><a href="{{url('/modificarForm')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Modificar mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/cambioContras')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Cambiar contraseña</a></li>
    <li class="list-group-item"><a href="{{url('/verDarBaja')}}" type="submit" class="btn mt-2" style="background-color:white;color:#30475e;">Darme de baja</a></li>   
    </ul>
</div>
</div>
<div class="col-6">
<!-- tabla de los datos de pepito-->
<img style="width: 100px;height:100px;" src="imagenes/user.png"/><label style="font-size:24px;margin-left:10px;"><strong>Hola {{auth()->user()->name}}!</strong></label>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Nombre: {{auth()->user()->name}}</li>
    <li class="list-group-item">Apellidos: {{auth()->user()->apellidos}}</li>
    <li class="list-group-item">DNI: {{auth()->user()->dni}}</li>
    <li class="list-group-item">Dirección: {{auth()->user()->direccion}}</li>
    </ul>
</div>
<!-- acciones para pepito -->
</div>


@endsection