<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prolongation extends Model
{
    protected $fillable = [
        'raison','datedebut','duree','datefin','autorisation_id',
   ];
   public function autorisation(){
       return $this->belongsTo(Autorisation::class);
   }
}
