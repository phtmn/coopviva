<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{

    public static function boot(){
        parent::boot();
            static::addGlobalScope(new UserScope());
    }

    protected $fillable = [
        'nome_completo',
        'data_nascimento',
        'telefone_principal',
        'cpf',
        'cnpj',
        'razao_social',
        'nome_fantasia',
        'genero',
        'cep',
        'rua',
        'numero',
        'endereco',
        'cidade',
        'estado',
        'complemento'];

    public function usuario(){
       return $this->BelongsTo(User::class);
    }

    public function endereco(){
        return $this->belongsTo(Endereco::class)->first();
    }

    public function banco(){
        return $this->belongsTo(Banco::class)->first();
    }
}
