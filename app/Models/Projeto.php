<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    
    public function osc(){
        return $this->belongsTo(Osc::class);
    }
}
