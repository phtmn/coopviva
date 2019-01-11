<?php

use Illuminate\Database\Seeder;
use App\User;

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
               
            'name'      => 'Investidor',
            'email'     => 'investidor@email.com',
            'password'  => bcrypt('123456'),
            'uf'        => 'PB',
            'sexo'      => 'M',
            'cidade'    => 'João Pessoa'
               
        ]);

        User::create([           
               
            'name'      => 'Osc',
            'email'     => 'osc@email.com',
            'password'  => bcrypt('123456'),
            'uf'        => 'PB',
            'sexo'      => 'M',
            'cidade'    => 'João Pessoa'
               
        ]);

        User::create([           
               
            'name'      => 'Investidor_Osc',
            'email'     => 'investidor-osc@email.com',
            'password'  => bcrypt('123456'),
            'uf'        => 'PB',
            'sexo'      => 'M',
            'cidade'    => 'João Pessoa'
               
        ]);
    }
}
