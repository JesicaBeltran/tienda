
@extends('inicio')
@section('carrito')

@foreach($carritoArray as $productos)
<p>{{$productos->id  }}</p>
<p>{{$productos->nombre  }}</p>
<p>{{$productos->precio  }}</p>
@endforeach

@endsection