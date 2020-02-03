@extends('inicio')
@section('content')
<div class="row">

@foreach($productos as $producto)
<div class="col-md-3 mt-2 d-flex align-items-stretch">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded " style="" >
        <img class="card-img-top" src="{{asset($producto->imagen_producto)}}" alt="Card image cap">
        <div class="card-body ">
<h5 class="card-title">{{ $producto->nombre_producto }}</h5>
<li class="list-group-item">{{ $producto->precio }} €</li>
</ul>
<a href="{{ url ('/articulo/'.$producto->id) }}" class="btn btn-primary">Ver articulo</a>
</div>
</div></div>
@endforeach
</div>
@endsection