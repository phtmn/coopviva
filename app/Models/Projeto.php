<?php

namespace App\Models;

use App\Scopes\Osc\OscScope;
use App\Scopes\User\UserScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projeto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id','descricao','nome','imagem','instancia_id','ambito_id','num_registro1','num_registro2',
        'segmento_id','objetivo_geral','objetivos_especificos','justificativa','publico_alvo','impactos_esperados',
        'artigo','valor_meta','responsavel_nome','responsavel_cpf_cnpj','responsavel_telefone1','responsavel_telefone2',
        'responsavel_email1','responsavel_email2','banco_patrocinio_id','banco_doacao_id','inicio_captacao','fim_captacao'
    ];

    public function osc(){
        return $this->belongsTo(Osc::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bancoPatrocinio(){
        return $this->belongsTo(Banco::class,'banco_patrocinio_id')->first();
    }
    public function bancoDoacao(){
        return $this->belongsTo(Banco::class,'banco_doacao_id')->first();
    }
}
