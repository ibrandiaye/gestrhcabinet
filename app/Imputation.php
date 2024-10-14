<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imputation extends Model
{
    protected $fillable =['type', 'taux', 'destination','beneficiaire','doc','employe_id'];
    public function employe(){
        return $this->belongsTo(Employe::class);
    }
}
