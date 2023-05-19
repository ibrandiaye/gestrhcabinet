<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hierarchie extends Model
{
    protected $fillable = [
        'nom'
   ];
   public function employes(){
    return $this->hasMany(Employe::class);
   }
}
