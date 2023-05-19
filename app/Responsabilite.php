<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsabilite extends Model
{
    protected $fillable = [
        'nom','debut','employe_id','fin'
   ];

   public function employe(){
    return $this->belongsTo(Employe::class);
   }
}
