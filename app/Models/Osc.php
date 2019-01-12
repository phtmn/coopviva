<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Osc extends Model
{
    protected $fillable = ['user_id','nome_fantasia','sigla_osc','ano_fundacao'];

    public function projetos(){
        return $this->hasMany(Projeto::class);
    }

    public function user(){
        return $this->belongsTo(App\User::class);
    }
}
