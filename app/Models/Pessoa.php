<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome','cpf','cnpj','telefone_1','telefone_2','email_1','email_2'];
}
