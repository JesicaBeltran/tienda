@extends('inicio')
@section('content')
<br><br>
<div class="container p-5 shadow" style="width:600px;">
<div class="row">
<div class="col-3">
<img  width="100px" height="100px" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/cambiocontra.png"/>
</div>
    <div class="col-6">
<!-- tabla de los datos de pepito-->
    <label style="font-size:24px;"><strong>Cambiemos tu contraseña {{auth()->user()->name}}</strong></label>
    
    <form method="POST" action="{{url('/cambiarC')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />

    <label><strong>Nueva contraseña:</strong><label><input type="password" id="nuevaContra" name="nuevaContra" />
    
    <button type="submit" class="btn mt-1 " style="background-color:#ba6b57;color:white;">Cambiar contraseña</button>
        
        <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
    </form>    
</div>
<!-- acciones para pepito -->
</div>
</div>

@endsection