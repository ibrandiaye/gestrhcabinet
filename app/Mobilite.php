<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobilite extends Model
{
    protected $fillable = [
        'nom','duree','prolongement'
   ];
   public function conges(){
    return $this->hasMany(Conge::class);
   }
}
