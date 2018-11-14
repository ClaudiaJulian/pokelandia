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
    <input type="text" name="name" id="name" value="" >
        
    <label for="weight">Color</label>
    <input type="text" name="color" id="color" value="">

    <button type="submit" name="button">Create Type</button>
       
</form>
</section>

<!-- <?php var_dump($_POST)?> -->
@endsection


