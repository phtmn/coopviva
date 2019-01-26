<?php

use Illuminate\Database\Seeder;
use App\Models\Objetivo;
class ObjetivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ODS 1
        Objetivo::create([
            'numeral'       => 1,
            'descricao'     => 'Erradicação da Probreza',
            'link'          => 'http://www.agenda2030.com.br/ods/1/',
            'img_p'         => asset('vendor/site/images/ods1.png'),
            'img_m'         => asset('vendor/site/images/ods1.png'),
            'img_g'         => asset('vendor/site/images/ods1.png'),
        ]);

        //ODS 2
        Objetivo::create([
            'numeral'       => 2,
            'descricao'     => 'Fome Zero e Agricultura Sustentável',
            'link'          => 'http://www.agenda2030.com.br/ods/2/',
            'img_p'         => asset('vendor/site/images/ods2.png'),
            'img_m'         => asset('vendor/site/images/ods2.png'),
            'img_g'         => asset('vendor/site/images/ods2.png'),
        ]);

        //ODS 3
        Objetivo::create([
            'numeral'       => 3,
            'descricao'     => 'Saúde e Bem Estar',
            'link'          => 'http://www.agenda2030.com.br/ods/3/',
            'img_p'         => asset('vendor/site/images/ods3.png'),
            'img_m'         => asset('vendor/site/images/ods3.png'),
            'img_g'         => asset('vendor/site/images/ods3.png'),
        ]);


    }
}
