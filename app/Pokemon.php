<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;


class Pokemon extends Model
{
    public $table = "pokemon";
    protected $guarded = [];

    // public function tipo(){ // 
    //    return $this->belongsTo(Type::class,'type_id','id');
    // }

    public function tipo(){
      
        return $this->belongsToMany(Type::class,'pokemon_type','pokemon_id','type_id');
    }
}
