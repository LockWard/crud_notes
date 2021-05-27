@extends('plantillas')

@section('seccion')

<h1 class="display-4">Detalle de nota</h1>
<p>Id: {{$nota->id}}</p>
<p>Nombre: {{$nota->nombre}}</p>
<p>Detalle: {{$nota->descripcion}}</p>
    
@endsection