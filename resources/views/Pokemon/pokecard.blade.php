@extends('Template.basic')

@section('content')

       
    <section class="content">
       <article class="pokecard">
      
        <ul>                            
            <img class="poke" src="{{ asset('poke-img/images/poke-'.$pokes->id.'.jpg') }}" alt="Icono de {{ $pokes->name }} ">               
            <h3>{{ $pokes['name'] }}</h3>
        </ul>     
        
        <ul class="index">       
            @foreach($pokes->tipo as $tipo)
               <a class="links" href="{{ route('tipo',['tipo'=>$tipo->name]) }}"><li style="list-style:none">{{ $tipo->name }}</li></a>
            @endforeach
        </ul>
        
        <ul>
            <h5>{{ 'Weight: ' . $pokes['weight'] }}</h5>
            <h5>{{ 'Height: ' . $pokes['height'] }}</h5>
            <h5>{{ 'Evolves: '. $pokes['evolves'] }}</h5>
        </ul>
       
        </article>

        <div class="index">
        <p ><a class="links" href="/pokemon/{{ $pokes['name'] }}/editar">Editar</a></p>
        <p ><a class="links" href="/pokemon/{{ $pokes['id'] }}/borrar">Borrar</a></p>
        <p ><a class="links" href="/pokemon">Ver más Pokemon</a></p>
        </div>
        
    </section>


          



@endsection