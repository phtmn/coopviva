<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
   protected $fillable = [ 'nome_completo','data_nascimento', 'telefone_principal', 'cpf', 'cnpj', 'razao_social', 'nome_fantasia', 'cep', 'endereco', 'cidade', 'estado', 'complemento'];

   public function usuario(){
       return $this->BelongsTo(\App\User::class);
   }
}
