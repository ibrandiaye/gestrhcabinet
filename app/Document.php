<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'nom', 'fichier', 'candidat_id','employe_id'
    ];
    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }
    public function employe(){
        return $this->belongsTo(Employe::class);
    }
}
