<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
<<<<<<< HEAD
   protected $fillable = ['nome_completo','data_nascimento', 'telefone_principal', 'cpf', 'cnpj', 'razao_social', 'nome_fantasia', 'cep', 'endereco', 'cidade', 'estado', 'complemento'];
=======
   protected $fillable = ['nome_completo','data_nascimento', 
                          'telefone_principal', 'cpf', 'cnpj', 
                          'razao_social', 'nome_fantasia'];
>>>>>>> 86e86227e383d326c53f58afe56b86b750b6ae06

   public function usuario(){
       return $this->BelongsTo(\App\User::class);
   }
}
