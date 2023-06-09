<?php

namespace App\Models;

use App\Notifications\MyResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apelido','nome','dt_nascimento','genero','cpf_cnpj','razao_social','nome_fantasia',
        'cargo','qtd_funcionarios','faturamento_mensal','cep','logradouro','cidade','bairro','uf','numero','complemento',
        'telefone','celular','tipo_pessoa','perfil_id','verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verifyUser(){
        return $this->hasOne(VerifyUser::class);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPasswordNotification($token));
    }

    public function perfil(){
        return $this->hasOne(Perfil::class);

    }

    public function projetos(){
        return $this->hasMany(Projeto::class);
    }

    public function osc(){
        return $this->hasOne(Osc::class)->first();
    }
    
}
