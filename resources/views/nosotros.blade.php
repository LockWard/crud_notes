@extends('plantillas')

@section('seccion')
<h1 class="display-4">Nosotros</h1>
<h2 class="lead">Este es mi equipo de trabajo</h2>

<div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active" data-toggle="" href="" role="tab">Equipo</a>

    @foreach ($equipo as $item)
        <a href="{{Route('nosotros', $item)}}" class="list-group-item list-group-item-action" data-toggle="" role="tab">{{$item}}</a>
    @endforeach

</div>
<div class="tab-content">
        
    @if (!empty($nombre))

        @switch($nombre)
            @case($nombre == 'Ignacio')
            <div class="tab-pane active" role="tabpanel">
                <h4 class="mt-5">El nombre es {{ $nombre }}</h4>
                <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt impedit qui a odio doloremque quidem tempora suscipit maiores eligendi? Numquam eligendi doloribus dolorum aspernatur ad voluptatibus veniam doloremque? Consectetur, aspernatur?</p>
            </div>
                @break
            @case('Juanito')
            <div class="tab-pane active" role="tabpanel">
                <h4 class="mt-5">El nombre es {{ $nombre }}</h4>
                <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt impedit qui a odio doloremque quidem tempora suscipit maiores eligendi? Numquam eligendi doloribus dolorum aspernatur ad voluptatibus veniam doloremque? Consectetur, aspernatur?</p>
            </div>
                @break
            @case('Pedrito')
            <div class="tab-pane active" role="tabpanel">
                <h4 class="mt-5">El nombre es {{ $nombre }}</h4>
                <p class="font-weight-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt impedit qui a odio doloremque quidem tempora suscipit maiores eligendi? Numquam eligendi doloribus dolorum aspernatur ad voluptatibus veniam doloremque? Consectetur, aspernatur?</p>
            </div>
                @break
            @default
                
        @endswitch
        
    @endif

</div>

@endsection

