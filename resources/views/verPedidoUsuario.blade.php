@extends('inicio')
@section('content')

<div class="row">
<div class="col-lg-8">
<table class="table text-center">
<thead class="thead" style="background-color:#30475e; color:white;">
<tr>
    <th scope="col align-self-center">Fecha de realización</th>
    <th scope="col text-center">Estado</th>
    <th scope="col text-center">direccion</th>
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
        <td scope="row text-center" >@if($pedido->estado == 1) En proceso @endif</td>
        <td scope="row text-center" >{{ $pedido->direccion }}</td>

        <td scope="row text-center" ><button type="submit" class="btn mt-2 d-flex" style="width:120px;background-color:#ba6b57;color:white;">Ver pedido</button></td>
        </form>
        @if($pedido->estado == 1)
        <form method="POST" action="{{route('cancelarPedido')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" value="{{$pedido->id}}" id="id_pedido" name="id_pedido" />
        <td><button href="submit" class="btn mt-2 d-flex btn-danger" style="width:120px;color:white;">Cancelar pedido</button></td>
        </form>
        @endif
    </tr>
</tbody>
@endforeach


</table>
</div>
@endsection