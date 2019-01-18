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
        'cep',
        'rua',
        'endereco',
        'cidade',
        'estado',
        'complemento'];

    public function usuario(){
       return $this->BelongsTo(\App\Models\User::class);
    }
}
