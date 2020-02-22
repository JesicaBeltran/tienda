@extends('inicio')
@section('content')
<br><br>
<div class="container pt-3 pb-2 pl-4 pr-4 shadow" style="width:600px;">
<div class="row">
    <div class="col offset-2.5">
<!-- tabla de los datos de pepito-->
<label style="font-size:24px;"><strong>Modifica tus datos</strong></label><br>
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
</div>

@endsection