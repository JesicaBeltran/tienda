@extends('inicio')
@section('content')
<br><br>
<div class="container p-5 shadow" style="width:600px;">
<div class="row">
    <div class="col offset-3">
<!-- tabla de los datos de pepito-->
    <img style="width: 100px;height:100px;" src="imagenes/user.png"/><label style="font-size:24px;margin-left:10px;"><strong>Hola {{auth()->user()->name}}!</strong></label>
    
    <p style="margin-top:20px;"><strong>Nombre:</strong> {{auth()->user()->apellidos}},{{auth()->user()->name}}</p>
    <p><strong>DNI:</strong> {{auth()->user()->dni}}</p>
    <p><strong>Dirección:</strong> {{auth()->user()->direccion}}</p><br>
    <form method="POST" action="{{url('/darBaja')}}">
    <a href="{{url('/verPedidos')}}" class="btn mt-2" style="background-color:#30475e;color:white;">Ver mis pedidos</a>
    <a href="{{url('/modificarForm')}}" class="btn mt-2 " style="background-color:#30475e;color:white;">Modificar mis datos</a>
    <a href="{{url('/cambioContras')}}" class="btn mt-2 " style="background-color:#ba6b57;color:white;">Cambiar contraseña</a>
    
    
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
        <button type="submit" class="btn mt-2 btn-danger">Darme de baja</button>
    </form>    
</div>
<!-- acciones para pepito -->
</div>
</div>

@endsection