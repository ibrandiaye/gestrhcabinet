<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    protected $fillable = [
        'fonction','datedebut','duree','datefin','service_id','candidat_id'
   ];
public function service(){
    return $this->belongsTo(Service::class);
}
public function candidat(){
    return $this->belongsTo(Candidat::class);
}
public function prolongations(){
    return $this->hasMany(Prolongation::class);
}
}
