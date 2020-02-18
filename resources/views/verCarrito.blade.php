@extends('inicio')
@section('content')

<div class="row">


<div class="col-lg-8">
<h3>Carrito</h3>
<table class="table text-center">
<thead class="thead-light">
<tr>
<th></th>
    <th scope="col align-self-center">Nombre</th>
    <th scope="col text-center">Precio</th>
    <th scope="col text-center">Cantidad</th>
    <th></th>
</tr>
</thead>
@foreach($contenido as $productos)
<tbody>
    <tr>
        <td scope="row text-center"><img style ="with:80px;height:80px;" src="{{ $productos->attributes->imagen }}"></img></td>
        <td scope="row text-center">{{ $productos->name }}</td>
        <td scope="row text-center" >{{ $productos->price }} €</td>
        <td>
          <form method="POST" action="{{ url('/actualizar') }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="hidden" name="id" id="id" value="{{$productos->id}}" />
            <input type="number" name="cantidad" id="cantidad" value="{{$productos->quantity }}" />
            <input type="image" style ="with:40px;height:40px;" src="imagenes/update.png"></img>
         </form>
        </td>
    <td text-center>
        <form method="POST" action="{{ route('cart.remove', $productos->id) }}">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="image" name="borrar" style ="with:40px;height:40px;" src="imagenes/eliminar.png"></img>
        </form>
    </td>
      
    </tr>
</tbody>
@endforeach
</table>
</div>
<div class="col-lg-3 mt-4">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Información
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Productos: {{ Cart::getContent()->count()}}</li>
    <li class="list-group-item">Precio Total: {{Cart::getTotal()}} €</li>
   @if (Cart::getContent()->count()>0)
   
   @if(Auth::guest())
    
    <a href="{{ url('/home') }}">Realizar pedido(falta login)</a>
  @else
  <a href="{{ url('/pedidoForm') }}">Realizar pedido(logueado)</a>
  @endif
  @endif
   
  </ul>
</div>
@endsection