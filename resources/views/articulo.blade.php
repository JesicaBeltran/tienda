@extends('inicio')
@section('content')

<div class="row">

@foreach($productos as $producto)

<div class="col-md-4">
        <img class="card-img-top" src="{{asset($producto->imagen_producto)}}" alt="Card image cap">
</div>
<div class="col-md-8 px-3">
<form method="POST" action="{{ url('/verCarrito') }}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="card-block px-3">
                <h4 class="card-title">{{ $producto->nombre_producto }}</h4>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text">{{ $producto->precio }} €</p>

               @if ($producto->stock== '0')
                <p class="card-text">No está en stock.</p>
                @else
                <p class="card-text">En stock.</p>
                
                <input type="number" name="cantidad" value="1" min="1" max="{{ $producto->stock }}"/>

                <input type="submit" value="Añadir al carrito" />
                @endif
        </div>
        <input type="hidden" name="id" value="{{ $producto->id }}" />
</form>
</div>

@endforeach
</form>
</div>

@endsection
