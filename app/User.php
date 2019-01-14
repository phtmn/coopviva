<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','uf','cidade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function perfil(){
        return $this->hasOne(\App\Models\Perfil::class);

    }

    public function projetos(){
        return $this->hasMany(Model\Projeto::class);
    }

    public function oscs(){
        return $this->hasMany(Models\Osc::class);
    }
    
}
