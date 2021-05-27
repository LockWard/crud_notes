@extends('plantillas')

@section('seccion')

<h1 class="display-4">Notas</h1>

@if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>    
@endif

<form method="POST" action="{{route('notas.crear')}}" class="form-group">
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

    <input class="form-control mb-2" placeholder="Nombre" type="text" name="nombre" value="{{old('nombre')}}">
    <input class="form-control mb-2" placeholder="Descripcion" type="text" name="descripcion" value="{{old('descripcion')}}">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td><a href="{{route('notas.detalle', $item)}}">{{$item->nombre}}</a></td>
            <td>{{$item->descripcion}}</td>
            <td><a href="{{route('notas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
            
            <form action="{{route('notas.eliminar', $item)}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<ul class="pagination justify-content-center">
    {{ $notas->links() }}
</ul>

@endsection
