@extends('Template.basic')

@section('content')

<!-- <section class="types">
  <article class="type" style="background-color:{{$tipo->color}}">
    <a href="{{ route('tipo',['tipo' => $tipo->id]) }}">
      <h3>{{ $tipo->name }}</h3>
    </a>
  </article>
</section> -->

<section class="content">
  <article> 
      <a href="{{ route('tipo','') }}">
      <h2 class="titulo" style="background-color:{{$tipo->color }}">{{ $tipo->name }}</h2>
      </a>
  </article> 

  <div class="index">
  @foreach($tipo->pokemon as $poke)
    <article class="pokecard">
        <a href="{{ route('pokemon.uno',['pokemon' => $poke->id]) }}">
            <ul>
            <img src="{{ asset('poke-img/images/poke-'.$poke->id.'.jpg') }}" alt="Icono de {{ $poke->name }}">
            <h3>{{ $poke->name }}</h3>
            </ul>
        </a> 

        <ul class="index">     
            @foreach($poke->tipo as $tipo)
               <a class="links" href="{{ route('tipo',['tipo'=>$tipo->name]) }}"><li style="list-style:none">{{ $tipo->name }}</li></a>
            @endforeach
        </ul>

        <ul>
        <h5>{{ 'Weight: ' . $poke->weight }}</h5>
        <h5>{{ 'Height: ' . $poke->height }}</h5>
        <h5>{{ 'Evolves: ' . $poke->evolves }}</h5>
        </ul>

    </article>
  @endforeach
  </div>
</section>

@endsection