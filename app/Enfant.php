<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $fillable =['prenom', 'nom', 'datenaiss','lieunaiss','sexe','scolarite','employe_id'];
public function employe(){
    return $this->belongsTo(Employe::class);
}
public function docenfants(){
    return $this->hasMany(Docenfant::class);
}

}
