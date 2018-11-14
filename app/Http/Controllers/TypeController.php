<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function todos()
    {
        $tipos = Type::All();
        return view('Type.index', compact('tipos'));
    }


    public function uno($name)
    {
        $tipos=Type::all();
        
        foreach($tipos as $tipo){
            if($tipo->name === $name){
            return view('Type.show')->with('tipo',$tipo);
            }
        }
        return "No se ha encontrado el Type solicitado";       
    }


    public function nuevo()
    {
      return view('Type.create');   
    }
    

    public function guardar(Request $request)
    {
        $mensajes = [
           'required' => "Te olvidaste del :attribute ."
        ];

       $validaciones = [
        'name' => 'required | unique:Types,name',
        'color' => 'required',
       ];

       $this->validate($request,$validaciones,$mensajes); 

       $pokemon = Type::create([
           'name' => $request->input('name'),
           'color' => $request->input('color')         
       ]);

       return redirect('/type');
    }


    public function editar($name)
    {
        $types=Type::all();

        foreach($types as $tipo){
            if($tipo->name === $name){
             
             return view('Type.editar')->with('tipo',$tipo);
             }
         }
         return "No se ha encontrado Type con ese nombre"; 
    }

    public function guardarCambios(Request $request, $name){
        $types=Type::all();

        foreach($types as $tipo){
            if($tipo->name === $name){
               
                $tipo->name = $request->input('name');
                $tipo->color = $request->input('color');
              
                $tipo->save();
                return redirect('/type/');
            }
        }
    }

    public function borrar($id)
    {
        $tipo = Type::find($id);
        $tipo->delete();
        
        return redirect('/type');      
    }




}
