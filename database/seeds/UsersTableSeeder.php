<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('perfis')->insert([
            ['nome'=>'Investidor'],
            ['nome'=>'Osc (Organizacao da Sociedade Civil)'],
            ['nome'=>'Administrador'],
        ]);

        DB::table('users')->insert([
            [
                'nome_social'   => 'Fisica - Investidor',
                'nome_completo' => 'Pessoa Fisica',
                'email'         => 'pessoafisica@email.com',
                'password'      => bcrypt('123456'),
                'tipo_pessoa'   => 'F',
                'perfil_id'     => 1,
                'dt_nascimento' => \Carbon\Carbon::now(),
                'genero'        => 'M',
                'cpf_cnpj'      => '000.000.000-00',
                'cep'           => '58300-000',
                'logradouro'    => 'Rua sem nome',
                'numero'        => 'S/N',
                'bairro'        => 'Bairro',
                'cidade'        => 'Cidade',
                'uf'            => 'PB',
                'ativo'         => 1,
                'verified'      => 1
            ],
            [
                'nome_social'   => 'Juridica - Investidor',
                'nome_completo' => 'Pessoa juridica',
                'email'         => 'pessoajuridica@email.com',
                'password'      => bcrypt('123456'),
                'tipo_pessoa'   => 'J',
                'perfil_id'     => 1,
                'dt_nascimento' => \Carbon\Carbon::now(),
                'genero'        => 'F',
                'cpf_cnpj'      => '00.000.000/0001-00',
                'cep'           => '58300-000',
                'logradouro'    => 'Rua sem nome',
                'numero'        => 'S/N',
                'bairro'        => 'Bairro',
                'cidade'        => 'Cidade',
                'uf'            => 'PB',
                'ativo'         => 1,
                'verified'      => 1

            ],
            [
                'nome_social'   => 'OSC - Usuario',
                'nome_completo' => 'Osc Usuário',
                'email'         => 'osc@email.com',
                'password'      => bcrypt('123456'),
                'tipo_pessoa'   => 'F',
                'perfil_id'     => 2,
                'dt_nascimento' => \Carbon\Carbon::now(),
                'genero'        => 'M',
                'cpf_cnpj'      => '000.000.000-00',
                'cep'           => '58200-000',
                'logradouro'    => 'Rua sem nome',
                'numero'        => 'S/N',
                'bairro'        => 'Bairro',
                'cidade'        => 'Cidade',
                'uf'            => 'PB',
                'ativo'         => 1,
                'verified'      => 1
            ],
            [
                'nome_social'   => 'Administrador',
                'nome_completo' => 'Administrador',
                'email'         => 'administrador@email.com',
                'password'      => bcrypt('secret'),
                'tipo_pessoa'   => 'M',
                'perfil_id'     => 3,
                'dt_nascimento' => \Carbon\Carbon::now(),
                'genero'        => 'M',
                'cpf_cnpj'      => '000.000.000-00',
                'cep'           => '58300-000',
                'logradouro'    => 'Rua sem nome',
                'numero'        => 'S/N',
                'bairro'        => 'Bairro',
                'cidade'        => 'Cidade',
                'uf'            => 'PB',
                'ativo'         => 1,
                'verified'      => 1
            ]
        ]);

    }
}
