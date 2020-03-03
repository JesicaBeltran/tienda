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
<h3 style="font-size:24px;color:#30475e;"><strong>Modifica tus datos</strong></h3><br>
<form method="POST" action="{{url('modificarUsuario')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="form-group">
<label class="control-label"><strong>Nombre:&nbsp</strong></label><input class="form-control" style="margin-top:20px;" type="text" name="name" id="name" value="{{auth()->user()->name}}"/>
</div><div class="form-group">
<label class="control-label"><strong>Apellidos:&nbsp</strong></label><input class="form-control" type="text" name="apellidos" id="apellidos" value="{{auth()->user()->apellidos}}"/>  
</div><div class="form-group">
<label class="control-label"><strong>Dirección:&nbsp</strong></label><input class="form-control" type="direccion" name="direccion" id="direccion" value="{{auth()->user()->direccion}}"/>
</div><div class="form-group">
<label class="control-label"><strong>DNI:&nbsp</strong></label><input class="form-control" type="text" name="dni" id="dni" value="{{auth()->user()->dni}}"/>
</div>
<input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
<button type="submit" class="btn mt-2" style="background-color:#f1935c;color:white;">Actualizar datos</button><br><br>
</form>    
</div>
</div>

@endsection