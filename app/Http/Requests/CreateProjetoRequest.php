<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjetoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_projeto'          => 'required|min:5|max:100|string',
            'descricao_resumida'    => 'required|min:10|max:50',
            'responsavel_projeto'   => 'required|min:3|max:50',
            'prop_nome'             => 'required',
            'prop_documento'        => 'required|integer',
            'resumo'                => 'min:100|max:500',
            'objetivo'              => 'min:100|max:500',
            'justificativa'         => 'min:100|max:500',
            'publico_alvo'          => 'min:100|max:500',
            'impactos_esperados'    => 'min:100|max:500',
            'contra_partidas'       => 'min:100|max:500',

        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'min'      => 'O tamanho do campo :attribute é muito curto',
            'max'      => 'O tamanho do campo :attribute é muito longo',
        ];
    }
}
