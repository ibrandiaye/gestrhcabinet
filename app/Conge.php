<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $fillable = [
        'datedebut','datefin','employe_id',
        'mobilite_id','complication',"dateexactaccouchement","datefinp"
   ];
   public function mobilite(){
    return $this->belongsTo(Mobilite::class);
   }
   public function employe(){
    return $this->belongsTo(Employe::class);
   }
}
