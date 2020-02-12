@extends('inicio')
@section('content')


  
<h3>Carrito</h3>
<table>
<tr>
<th></th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Cantidad</th>
</tr>

@foreach($contenido as $productos)
<tr>
<td>{{ $productos -> name }}</td>
<td>{{ $productos -> price }}</td>
</tr>

@endforeach
</table>
@endsection