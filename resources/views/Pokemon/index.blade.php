@extends('Template.basic')

@section('content')

<section class="content" >
    <h2 class="titulo">Pokemon</h2>

    <div style="margin-top:20px;">
       
        <ul class="index">             
        @foreach($pokemons as $pokemon)

        <li class="pokebutton">  
            <a class="links" href="pokemon/{{$pokemon['id']}}">
                <img src="{{ asset('poke-img/images/poke-'.$pokemon->id.'.jpg') }}" alt="Icono de {{ $pokemon->name }} "> 
                <h3> {{$pokemon['name']}} </h3> 
            </a>
        </li>
     
        @endforeach
        </ul>      
    
    </div> 

</section>

@endsection