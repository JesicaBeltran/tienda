@extends('inicio')
@section('content')

<div class="row">

@foreach($productos as $producto)

<div class="col-md-3 mt-2 d-flex align-items-stretch">
<form method="POST" action="{{ url ('/carrito')}}">
<input type="text" name="_token" value="{{csrf_token()}}" />
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded " style="" >
        <img class="card-img-top" src="{{asset($producto->imagen_producto)}}" alt="Card image cap">
        <div class="card-body ">
<h5 class="card-title">{{ $producto->nombre_producto }}</h5>
<p class="card-text">{{ $producto->descripcion }}</p>
<ul class="list-group list-group-flush">
<li class="list-group-item">{{ $producto->precio }} €</li>
<li class="list-group-item">{{ $producto->stock }} en stock.</li>
</ul>
<input type="submit" value="Añadir al carrito" />
</div>
</div>
<input type="hidden" name="nombre" value="{{ $producto->nombre_producto }}" />
</form>
</div>

@endforeach
</div>

@endsection