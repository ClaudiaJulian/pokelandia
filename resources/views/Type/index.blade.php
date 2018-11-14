@extends('Template.basic')

@section('content')
 
  <section class="content">

    <h2 class="titulo">Types</h2>

    <ul class="index">
    @foreach($tipos as $tipo)
       
      <li class="typebutton" style="background-color:{{$tipo->color }}">
        <a class="links" href="{{ route('tipo',['tipo'=>$tipo->name]) }}">
           <h3> {{ $tipo['name'] }}</h3>
        </a>
      </li>
   
    @endforeach
    </ul>
    
  </section>

@endsection

<!-- <article class="type" style="background-color:{{ $tipo->color }}"> -->