<?php

namespace App\Http\Controllers;


use App\Pokemon;
use App\Type;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    
    public function todos(Request $request) 
    {
        $pokemons=Pokemon::All();
        return view('pokemon.index')->with('pokemons',$pokemons);
    }

    
    public function nuevo()
    {
        $tipos = Type::all();  
        return view('Pokemon.create')->with('tipos',$tipos);   
    }
    

    public function guardar(Request $request)
    {
        $mensajes = [
           'required' => "Te olvidaste del :attribute ."
       ];

        $validaciones = [
        'name' => 'required | unique:Pokemon,name',
        'weight' => 'required',
        'height' => 'required',
        'typeid' => 'required',
        'evolves' => 'required'

       ];

       $this->validate($request,$validaciones,$mensajes); 

       $pokemon = Pokemon::create([
           'name' => $request->input('name'),
           'weight' => $request->input('weight'),
           'height' => $request->input('height'),
           'evolves' => $request->input('evolves')           
       ]);
       
        $pokemon->tipo()->sync($request->input('typeid'));

       return redirect('/pokemon');
    }

    
    public function uno($id)
    {
       $pokes = Pokemon::find($id);
       if ($pokes !== null){ 
       return view('pokemon.pokeCard')->with('pokes',$pokes);
       }   
       return "No se ha encontrado el Pokemon solicitado";       
    }


    public function editar($name)
    {
        $pokemon=Pokemon::all();
        $tipos = Type::all();  

        foreach($pokemon as $poke){
            if($poke->name === $name){
            return view('Pokemon.editar')->with('poke',$poke)->with('tipos',$tipos);
            }
         }
         return "No se ha encontrado Pokemon solicitado"; 
    }

    
    public function guardarCambios(Request $request, $name){
        $pokemon=Pokemon::all();

        foreach($pokemon as $poke){
            if($poke->name === $name){
               
                $poke->name = $request->input('name');
                $poke->weight = $request->input('weight');
                $poke->height = $request->input('height');
                $poke->evolves = $request->input('evolves');

                $poke->save();
                $poke->tipo()->sync($request->input('typeid'));

                return redirect('/pokemon/' . $poke->id);
            }
        }
    }

    public function borrar($id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();
        
        return redirect('/');      
    }
}
