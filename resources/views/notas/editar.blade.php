@extends('plantillas')

@section('seccion')

<h1 class="display-4">Editar nota #{{$nota->id}}</h1>

@if (session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> 
@endif

<form method="POST" action="{{route('notas.update', $nota->id)}}" class="form-group">
    @method('PUT')
    @csrf

    @error('nombre')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        El nombre es obligatorio.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>  
    @enderror

    @error('descripcion')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        La descripcion es obligatorio.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> 
    @enderror

    <input class="form-control mb-2" placeholder="Nombre" type="text" name="nombre" value="{{$nota->nombre}}">
    <input class="form-control mb-2" placeholder="Descripcion" type="text" name="descripcion" value="{{$nota->descripcion}}">
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
</form>
    
@endsection