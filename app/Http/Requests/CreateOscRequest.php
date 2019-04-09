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
            'historia'      => 'required|max:250',
            'objetivos'     => 'max:250',
            'impactos'      => 'required|max:250',
            'missao'        => 'required|max:250',
			'visao'        	=> 'required|max:250',
            'valores'       => 'max:250',
            'espaco_livre'  => 'max:500',
        ];
    }
	
	public function attributes(){
        return [
            'historia'         	=> 'história',
			'missao'         	=> 'missão',
            'visao' 			=> 'visão',
			'espaco_livre' 		=> 'espaço livre'
        ];
    }

    public function messages(){
        return [
            'required' => 'Preencha este campo!',
            'max:'     => 'O campo é muito longo',
            'min'      => 'O campo é muito curto',
            'unique'   => 'O campo já está em uso'
        ];
    }    
}
