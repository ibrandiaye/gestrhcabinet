<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Candidat extends Model
{
    protected $fillable = [
        'prenom', 'nom', 'datenaiss','lieunaiss','email','sexe','sm','diplome','service_id','cv',
        'numdossier','datedepot','qualification','tel','photo'
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function autorisations(){
        return $this->hasMany(Autorisation::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
