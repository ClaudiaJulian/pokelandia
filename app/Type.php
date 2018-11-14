<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pokemon;

class Type extends Model
{
    protected $guarded = [];
    
    // public function pokemon(){
    //     return $this->hasMany(Pokemon::class,'pokemon_id','id');

    public function pokemon(){
        
        return $this->belongsToMany(Pokemon::class,'pokemon_type','type_id','pokemon_id');
    }
}
