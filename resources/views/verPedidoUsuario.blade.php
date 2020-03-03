@extends('inicio')
@section('content')

<div class="row">
<div class="col-3">
    <div class="card" style="width: 18rem;">
  <div class="card-header" style="background-color:#30475e;color:white;">
  Acciones
  </div>
  <ul class="list-group list-group-flush">
  
    <li class="list-group-item"><a href="{{url('/verPerfil')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/verPedidos')}}" class="btn mt-2" style="background-color:white;color:#30475e;">Ver mis pedidos</a></li>
    <li class="list-group-item"><a href="{{url('/modificarForm')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Modificar mis datos</a></li>
    <li class="list-group-item"><a href="{{url('/cambioContras')}}" class="btn mt-2 " style="background-color:white;color:#30475e;">Cambiar contraseña</a></li>
    <li class="list-group-item"><a href="{{url('/verDarBaja')}}" type="submit" class="btn mt-2" style="background-color:white;color:#30475e;">Darme de baja</a></li>
   
    </ul>
</div>
</div>
<div class="col-lg-8">
<h3 style="text-align:center;color:#30475e">Tus pedidos</h3><br>
<table class="table text-center">
<thead class="thead" style="background-color:#30475e; color:white;">
<tr>
    <th scope="col align-self-center">Fecha de realización</th>
    <th scope="col text-center">Estado</th>
    <th scope="col text-center">direccion</th>
    <th scope="col text-center"></th>
    <th scope="col text-center"></th>
</tr>
</thead>

@foreach($pedidos as $pedido)


<tbody>
        <tr>
        <form action="{{route('verpdf')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" value="{{$pedido->id}}" id="id_pedido" name="id_pedido" />
        <td scope="row text-center">{{ $pedido->fecha_realizacion }}</td>
        <td scope="row text-center" >@if($pedido->estado == 1) En proceso @elseif ($pedido->estado == 2) Cancelado @endif</td>
        <td scope="row text-center" >{{ $pedido->direccion }}</td>

        <td scope="row text-center" ><button style="color: transparent; background-color: transparent; border-color: transparent;"><img type="submit" width="70px" height="60px" src="https://ieslamarisma.net/proyectos/2020/jesicabeltran/tienda/public/imagenes/pdf.png" class="btn mt-2 d-flex"></img></button></td>
        </form>
        @if($pedido->estado == 1)
        <form method="POST" action="{{route('cancelarPedido')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" value="{{$pedido->id}}" id="id_pedido" name="id_pedido" />
        <td><button href="submit" class="btn mt-2 d-flex btn-danger" style="color:white;">Cancelar</button></td>
        </form>
        @endif
    </tr>
</tbody>
@endforeach


</table>
</div>
@endsection