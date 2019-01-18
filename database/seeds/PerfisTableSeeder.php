<?php

use Illuminate\Database\Seeder;
use App\Models\Perfil;

class PerfisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perfil::create([           
            'user_id'           => 1,
            'nome_completo'     => 'Usuario Investidor',
            'data_nascimento'   => '1990-07-29',
            'telefone_principal' => '(83)988060849',
            'cpf'               => '09623421494',
        ]);

        Perfil::create([           
            'user_id'           => 2,
            'nome_completo'     => 'Usuario OSC',
            'data_nascimento'   => '1990-07-29',
            'telefone_principal' => '(83)3217-3530',
            'cnpj'              => '03730973000174'
        ]);
            
    }
}
