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
<div class="col-6" style="margin-top:50px;">
<!-- tabla de los datos de pepito-->
<form method="POST" action="{{url('/darBaja')}}">
<input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
<h3>¿Está seguro de dar de baja su cuenta?</h3>
<button type="submit" class="btn mt-2" style="margin-left:150px;background-color:white;color:#30475e;">Darme de baja</button>
<a href="{{url('/verPerfil')}}" class="btn mt-2" style="background-color:white;color:red;">Cancelar</a>
</form>
<!-- acciones para pepito -->
</div>
@endsection