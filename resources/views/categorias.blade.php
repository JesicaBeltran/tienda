@extends('inicio')
@section('content')
<div class="container-fluid" >
<div class="row" id="filaCategoria">

@foreach($datos as $dato)
<div class="col-md-3 mt-2">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="" >
        <img class="card-img-top" src="{{asset($dato->imagen_producto)}}" alt="Card image cap">
        <div class="card-body ">
<h5 class="card-title">{{ $dato->nombre_producto }}</h5>
<p class="card-text">{{ $dato->descripcion }}</p>
<ul class="list-group list-group-flush">
<li class="list-group-item">{{ $dato->precio }} €</li>
<li class="list-group-item">{{ $dato->stock }} en stock.</li>
</ul>
<a href="./ejercicio3_152.html" class="btn btn-primary">Go somewhere</a>
</div>
</div></div>

@endforeach
</div>
</div>

@endsection