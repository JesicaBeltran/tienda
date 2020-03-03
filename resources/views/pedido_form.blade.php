@extends('inicio')
@section('content')

<!-- Resumen del pedido -->
<h3 style="text-align:center;color:#30475e">Resumen de su pedido</h3><br>
<div class="row">

    
<div class="col-3">
    <div class="card" style="width: 18rem;">
  <div class="card-header" style="background-color:#30475e;color:white;">
  Acciones
  </div>
  <ul class="list-group list-group-flush">
  <form method="POST" action="{{url('/darBaja')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" value="{{auth()->user()->id}}" id="id" name="id" />
    <li class="list-group-item"><a href="{{url('/verPedidos')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis pedidos</a></li>
    <li class="list-group-item"><a href="{{url('/modificarForm')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Modificar mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/cambioContras')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Cambiar contraseña</a></li>
    <li class="list-group-item"><button type="submit" class="btn mt-2" style="background-color:white;color:#30475e;">Darme de baja</button></li>
    </form> 
    </ul>
</div>
</div>

<div class="col-md-6">
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
<div class="col-lg-3">
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
<a href="{{ route('payment') }}"></a>
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