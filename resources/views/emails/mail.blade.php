<h2>Hola <strong>{{auth()->user()->name}}!</strong></h2>
<h4>Este es el resumen del pedido que ha realizado</h4>

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
<p><strong>Total productos:</strong> {{$total}} productos</p>
<p><strong>Total pagado:</strong> {{Cart::getTotal()}} €</p>
<p><strong>Direccion de entrega:</strong> {{ $direccionEntrega }}</p>
