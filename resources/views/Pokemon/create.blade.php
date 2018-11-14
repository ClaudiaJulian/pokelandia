@extends('Template.basic')

@section('content')

<ul class="errors">
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>    
@endforeach
</ul>

<section>
<form method="POST" id="nuevo" action="" name="nuevo" method="post" style="text-align: center;" enctype="multipart/form-data"> 
    @csrf  
    
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="" >
        
    <label for="weight">Weight</label>
    <input type="number" name="weight" id="weight" value="">
    
    <label for="height">Height</label>
    <input type="number" name="height" id="height" value="">
 
    <label for="evolves">Evolves</label>
    <input type="text" name="evolves" id="evolves" value=""><br><br>
    
    <div>
    <label for="typeid">Types</label><br>
        @foreach($tipos as $tipo)
        <input type="checkbox" name="typeid[]" id="typeid" value="{{ $tipo['id'] }}">{{ $tipo['name'] }}
        @endforeach
    </div>
    
    <button type="submit" name="button">Create Pokemon</button>
   
</form>

<div class="index">          
          <p ><a class="links" href="/type">Type</a></p>    
          <p ><a class="links" href="/pokemon">Pokemon</a></p>
</div>

</section>

<!-- <?php var_dump($_POST)?> -->
@endsection


