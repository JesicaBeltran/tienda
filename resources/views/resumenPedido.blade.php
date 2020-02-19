@extends('inicio')
@section('content')

<h1>resumen pedido (prueba de email)</h1>
<form method="POST" action="{{ url('/') }}">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<button type="submit" class="btn btn-primary">aceptar y recibir correo</button>
</form>
@endsection