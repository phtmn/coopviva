<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Osc extends Model
{
    protected $fillable = [
        'nome_fantasia','cnpj','ano_fundacao','ano_inscricao_cnpj','sigla','cnae','cnae_sec','responsavel_legal','banco_id',
        'situacao_imovel_id','email','site','descricao','telefone','cep','logradouro','numero','cidade','bairro','complemento',
        'uf','atividades_economicas_id','area_atuacao','sub_area1','sub_area2','surgimento_osc','missao_osc','objetivo_ods',
        'visao_osc','finalidades_estatutarias_ods','link_estatuto_osc','user_id','logo','video_institucional','fan_page','instagram'
    ];

    public function projetos(){
        return $this->hasMany(Projeto::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function banco(){
        return $this->belongsTo(Banco::class,'banco_id')->first();
    }

    public function metas(){
        return $this->hasMany(Metas_Oscs::class)->get();
    }


}
