<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docenfant extends Model
{
    protected $fillable = [
        'nom', 'fichier', 'enfant_id'
    ];

    public function enfant(){
        return $this->belongsTo(Enfant::class);
    }
}
