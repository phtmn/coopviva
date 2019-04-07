<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOscRequest extends FormRequest
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
            'nome_fantasia' => 'required|min:3|max:100',
            'responsavel'   => 'required|min:3|max:100',
            'email'         => 'email|unique:oscs,id',
            'historia'      => 'max:500',
            'objetivos'     => 'max:500',
            'impactos'      => 'max:500',
            'missao'        => 'max:500',
            'valores'       => 'max:500',
            'espaco_livre'  => 'max:500',
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatorio',
            'max:'     => 'O campo :attribute é muito longo',
            'min'      => 'O campo :attribute é muito curto',
            'unique'   => 'O campo :attribute já está em uso'
        ];
    }    
}
