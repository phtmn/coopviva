<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['user_id','descricao','segmento_cultural','telefone_1','valor_meta'];

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function user(){
        return $this->belongsTo(App\User::class);
    }
}
