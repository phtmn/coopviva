<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([           
               
            'name'          => 'Investidor',
            'email'         => 'investidor@email.com',
            'password'      => bcrypt('123456'),
            'uf'            => 'PB',
            'sexo'          => 'M',
            'cidade'        => 'João Pessoa',
            'tipo_usuario'  => 'investidor',
            'tipo'          => 'PF'
               
        ]);

        User::create([           
               
            'name'          => 'Admin',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('123456'),
            'uf'            => 'PB',
            'sexo'          => 'M',
            'cidade'        => 'João Pessoa',
            'tipo_usuario'  => 'investidor',
            'tipo'          => 'PF',
            'isAdmin'       => 1
               
        ]);

        User::create([           
               
            'name'          => 'Osc',
            'email'         => 'osc@email.com',
            'password'      => bcrypt('123456'),
            'uf'            => 'PB',
            'sexo'          => 'M',
            'cidade'        => 'João Pessoa',
            'tipo_usuario'  => 'osc',
            'tipo'          => 'PJ'
               
        ]);


    }
}
