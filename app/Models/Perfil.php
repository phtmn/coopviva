<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
   protected $fillable = ['nome_completo','data_nascimento', 'telefone', 'cpf', 'cnpj', 'razao_social', 'nome_fantasia'];

   public function usuario(){
       return $this->BelongsTo(\App\User::class);
   }
}
