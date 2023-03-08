<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'prenom', 'nom', 'datenaiss','lieunaiss','email','sexe','adresse','service_id',
        'tel','cni','matricule','adresse','religion','retraite','sm','typecontrat','datenomination',
        'datefonction','religion','famille_id','categorie_id','fonction_id','employeur_id','contrat_id'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }
    public function famille(){
        return $this->belongsTo(Famille::class);
    }
    public function employeur(){
        return $this->belongsTo(Employeur::class);
    }
    public function contrat(){
        return $this->belongsTo(Contrat::class);
    }
}
