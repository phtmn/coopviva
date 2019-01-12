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
            'user_id'       => 1,
            'nome_completo' => 'Usuario Investidor',
            'tipo_perfil'   => 'I'               
        ]);

        Perfil::create([           
            'user_id'       => 2,  
            'nome_completo' => 'Usuario OSC',
            'tipo_perfil'   => 'O'               
        ]);

        Perfil::create([           
            'user_id'       => 3, 
            'nome_completo' => 'Investidor_Osc',
            'tipo_perfil'   => 'D'               
        ]);
            
    }
}
