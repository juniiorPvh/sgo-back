<?php

use Illuminate\Database\Seeder;

class OrquestraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orquestras')->delete();

        DB::table('orquestras')->insert( [
            'name' => 'Orquestra Harmonia Celeste',
            'acronyms' => 'OHC',
            'address' => 'Rua Josè de Alencar, 3286 - Caiari, Porto Velho - RO, 78900-390',
            'email' => 'email@ohc.com.br',
            'phone' => '(69) 99999-9999',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('orquestras')->insert( [
            'name' => 'Orquestra Tons Celestiais',
            'acronyms' => 'OTC',
            'address' => 'Av. Jatuarana, 4818 - Cohab, Porto Velho - RO, 76808-086',
            'email' => 'email@otc.com.br',
            'phone' => '(69) 98888-9999',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

    }
}
