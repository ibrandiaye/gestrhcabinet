<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
         'nom'
    ];
    public function candidats(){
        return $this->hasMany(Candidat::class);
    }
    public function autorisations(){
        return $this->hasMany(Autorisation::class);
    }
}
