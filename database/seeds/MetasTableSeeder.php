<?php

use Illuminate\Database\Seeder;

class MetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ODS 1
        DB::table('metas')->insert([
            [
                'objetivo_id'   => 1,  //codigo ods
                'codigo'        => '1.1',
                'descricao'     => 'Até 2030, erradicar a pobreza extrema para todas as pessoas em todos os lugares, atualmente medida como pessoas vivendo com menos de US$ 1,25 por dia'
            ],
            [
                'objeito_id'    => 1,
                'codigo'        => '1.2',
                'descricao'     => 'Até 2030, reduzir pelo menos à metade a proporção de homens, mulheres e crianças, de todas as idades, que vivem na pobreza, em todas as suas dimensões, de acordo com as definições nacionais'
            ],
            [
                'objetivo_id'   => 1,
                'codigo'        => '1.3',
                'descricao'     => 'Implementar, em nível nacional, medidas e sistemas de proteção social apropriados, para todos, incluindo pisos, e até 2030 atingir a cobertura substancial dos pobres e vulneráveis'
            ]
        ]);




    }
}
