@extends('inicio')
@section('content')
<br><br>
<div class="container p-5 shadow" style="width:600px;">
<div class="row">
    <div class="col offset-3">
<!-- tabla de los datos de pepito-->
    <label style="font-size:24px;"><strong>Cambiemos tu contraseña {{auth()->user()->name}}</strong></label>
    <form method="POST" action="{{url('/cambiarC')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />

    <label><strong>Nueva contraseña:</strong><label><input type="password" id="nuevaContra" name="nuevaContra" />
    <label><strong>DNI:</strong><label><input type="password" id="contraNueva" name="contraNueva" />
   
   
    <button type="submit" class="btn mt-2 " style="background-color:#30475e;color:white;">Cambiar contraseña</button>
        
        <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
    </form>    
</div>
<!-- acciones para pepito -->
</div>
</div>

@endsection