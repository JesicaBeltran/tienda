@extends('inicio')
@section('content')
<div style="margin-top:50px;" class="offset-3">
<h4>¡Su pedido se ha realizado correctamente!</h4>
<h6>Se ha enviado el resumen de su pedido a su e-mail {{auth()->user()->email}}</h6>
</div>
@endsection