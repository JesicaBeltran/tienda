@extends('inicio')
@section('content')

<!-- Resumen del pedido -->
<h3>Resumen del pedido</h3>
<div class="row">
<div class="col-lg-8">
<table class="table text-center">
<thead class="thead" style="background-color:#30475e; color:white;">
<tr>
<th></th>
    <th scope="col align-self-center">Nombre</th>
    <th scope="col text-center">Precio</th>
    <th scope="col text-center">Cantidad</th>
    <th scope="col text-center">Descuento</th>
 
</tr>
</thead>
@foreach($contenido as $productos)
<tbody>
    <tr>
        <td scope="row text-center"><img style ="with:80px;height:80px;" src="{{ $productos->attributes->imagen }}"></img></td>
        <td scope="row text-center">{{ $productos->name }}</td>
        <td scope="row text-center" >{{ $productos->price }} €</td>
        
        <td>
         
            <p name="cantidad" id="cantidad" value="{{$productos->quantity }}">{{$productos->quantity }}</p>
           
         </form>
        </td>
    <td text-center>
       
            <p>{{ $productos->attributes->descuento }} %</p>
      
    </td>
      
    </tr>
</tbody>
@endforeach
</table>
</div>
<div class="col-lg-3 mt-4">
<div class="card" style="width: 18rem;">
  <div class="card-header" style="background-color:#30475e;color:white;">
  Resumen final
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Productos: {{$total}}</li>
    <li class="list-group-item">Precio Total: {{Cart::getTotal()}} €</li>
    </ul>
</div>

<!-- hacer form -->

<form method="POST" action="{{ url('/crearPedido') }}">

<input type="hidden" name="_token" value="{{csrf_token()}}" />
  <div class="form-group">
    <label for="direccion">Direccion de entrega</label>
    <input type="text" class="form-control" id="direccion"  name="direccion" placeholder="C\...">
  </div>
  <p>falta opciones de pago<p>  
  <input type="hidden" name="name_user" id="name_user" value="{{auth()->user()->name}}"/>
  <input type="hidden" name="email_user" id="email_user"value="{{auth()->user()->email}}"/>
  <input type="hidden" name="id_user" id="id_user" value="{{auth()->id()}}"/>
  <input type="hidden" name="codigo_user" id="codigo_user" value="{{auth()->id()}}"/>

  <button type="submit" class="btn" style="background-color:#f1935c; color:white;">Pagar</button>
</form>

<!-- pasar por post en el form los datos del pedido para agregarlo en la bd por un controlador-->


@endsection