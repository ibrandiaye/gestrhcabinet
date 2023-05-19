<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupe extends Model
{
    protected $fillable = [
        'fonction_id','debut','employe_id','fin'
   ];

   public function employe(){
    return $this->belongsTo(Employe::class);
   }
   public function fonction(){
    return $this->belongsTo(Fonction::class);
   }
}
