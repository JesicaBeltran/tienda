@extends('inicio')
@section('content')

<h1>Pagina del pedido</h1>

<!-- hacer form -->

<form method="POST" action="{{ url('/crearPedido') }}">

<input type="hidden" name="_token" value="{{csrf_token()}}" />
  <div class="form-group">
    <label for="direccion">Direccion de entrega</label>
    <input type="text" class="form-control" id="direccion"  name="direccion" placeholder="C\...">
  </div>
  <div class="form-group">
    <label for="dni">DNI</label>
    <input type="text" class="form-control" id="dni" name="dni" placeholder="DNI">
  </div>
  <p>falta opciones de pago<p>  
  <input type="hidden" name="name_user" id="name_user" value="{{auth()->user()->name}}"/>
  <input type="hidden" name="email_user" id="email_user"value="{{auth()->user()->email}}"/>
  <input type="hidden" name="id_user" id="id_user" value="{{auth()->id()}}"/>
  <input type="hidden" name="codigo_user" id="codigo_user" value="{{auth()->id()}}"/>

  <button type="submit" class="btn btn-primary">Pagar</button>
</form>

<!-- pasar por post en el form los datos del pedido para agregarlo en la bd por un controlador-->


@endsection