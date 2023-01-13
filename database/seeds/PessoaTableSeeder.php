<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $junior = \App\User::create( array (
            'name'				=>	'Junior Santos',
            'cpf'				=>	'003844212-45',
            'dt_nasc'			=>	'15/03/1991',
            'sexo'				=>	'M',
            'email'				=>	'juniior.pvh@gmail.com',
            'phone'			=>	'(69) 98455-8888',
            'password'			=>	Hash::make('123'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ));

        $sidney = \App\User::create( array (
            'name'				=>	'Mário Sidney',
            'cpf'				=>	'606029962-87',
            'dt_nasc'			=>	'23/11/1982',
            'sexo'				=>	'M',
            'email'				=>	'sidneymario@hotmail.com',
            'phone'			=>	'(69) 99999-5555',
            'password'			=>	Hash::make('123'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ));

    }
}
