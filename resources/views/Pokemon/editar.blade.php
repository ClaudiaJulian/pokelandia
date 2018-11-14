@extends('Template.basic')

@section('content')

<section class="content">

<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<form method="POST" id="nuevo" action="" name="nuevo" method="post" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf  
    
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $poke->name }}" >
        
    <label for="weight">Weight</label>
    <input type="number" name="weight" id="weight" value="{{ $poke->weight }}">
    
    <label for="height">Height</label>
    <input type="number" name="height" id="height" value="{{ $poke->height }}">
       
    <label for="evolves">Evolves</label>
    <input type="text" name="evolves" id="evolves" value="{{ $poke->evolves }}"><br><br>

    <div>
    <label for="typeid">Types</label><br>
        @foreach($tipos as $tipo)
        <input type="checkbox" name="typeid[]" id="typeid" value="{{ $tipo['id'] }}">{{ $tipo['name'] }}
        @endforeach
    </div>
    
    <button type="submit" name="button">Guardar Pokemon</button>
   
</form>
<section>

<!-- <?php var_dump($_POST)?> -->
@endsection