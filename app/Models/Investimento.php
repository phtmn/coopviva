<?php

namespace App\Models;

use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope(new UserScope());
    }

    protected  $fillable = ['status','forma_pgto','mp_codigo','mp_pagamento'];

    public function usuario(){
        return $this->belongsTo(User::class,'user_id')->first();
    }

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function projeto(){
        return $this->belongsTo(Projeto::class);
    }
}