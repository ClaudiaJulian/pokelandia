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
    <input type="text" name="name" id="name" value="{{ $tipo->name }}" >
        
    <label for="weight">Color</label>
    <input type="text" name="color" id="color" value="{{ $tipo->color }}">

    <button type="submit" name="button">Guardar Type</button>
       
</form>

<div class="index">          
    <p ><a class="links" href="/pokemon">Pokemon</a></p>    
    <p ><a class="links" href="/type">Types</a></p>
</div>
</section>

<!-- <?php var_dump($_POST)?> -->
@endsection