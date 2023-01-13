<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(OrquestraTableSeeder::class);
         $this->call(PessoaTableSeeder::class);
         $this->call(PapelTableSeeder::class);
         $this->call(InstrumentoTableSeeder::class);
         $this->call(MembroTableSeeder::class);
    }
}
