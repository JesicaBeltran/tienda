@extends('inicio')
@section('content')
<h4 style="font-weight:bold;text-align:center;" >Categoria: {{$categoriaNombre}}</h4>

<div class="row">


@foreach($productos as $producto)
<div class="col-md-2 mt-2 d-flex align-items-stretch">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded " style="" >
        <img class="card-img-top" src="{{asset($producto->imagen_producto)}}" alt="Card image cap">
        <div class="card-body">
<h5 class="card-title" style="height:80px;">{{ $producto->nombre_producto }}</h5>
<p class="card-text text-center">{{ $producto->precio }} €</p>

<a href="{{ url ('/articulo/'.$producto->id) }}" class="btn mt-2 d-flex" style="background-color:#30475e; color:white;">&nbsp&nbsp&nbsp&nbspVer articulo</a>
</div>
</div></div>

@endforeach
{{ $productos->links() }}
</div>

@endsection