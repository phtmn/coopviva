<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'user_id',
        'descricao',
        'imagem',
        'instancia',
        'ambito',
        'num_registro1',
        'num_registro2',
        'segmento_cultural',
        'artigo',
        'valor_meta'
    ];


    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new UserScope());
    }

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
