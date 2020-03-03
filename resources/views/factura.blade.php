@extends('encabezadoPDF')
@section('cuerpo')
<div class="row" style="margin-top:100px;">
<div class="col-lg-8">
<h3>Factura</h3><br>

<div>
<p>Woman's Clothes España</p>
<p>Via de las Dos Castillas nº33</p>
<p>Edificio Ática 2</p>
<p>Pozuelo de Alarcón, 28224 Madrid</p>
<p>España</p>
<p>Numero de IVA: ESW0184081H</p>
</div>


<table class="table">
  <thead class="" style="background-color:#f1935c;color:white;">
    <tr>
      <th scope="col">Nombre del producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
  @foreach($prueba as $da)
    <tr>
      <td>{{$da->nombre_producto}}</td>
      <td>{{$da->cantidad}}</td>
      <td>{{$da->precio}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div style="float:right;"><p>Total pagado: {{$totalP}}€</p></div><br><br>
<p>Enviado a: {{auth()->user()->name}}</p>
<p>Direccion de envio: {{$direccion}}</p>
<p>Estado del pedido: @if($estado == 1) en proceso @elseif ($estado == 2) cancelado @endif</p>

<h5>¡Gracias por confiar en nosotros!</h5>
</div>

@endsection