<?php

use Illuminate\Database\Seeder;

class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membros')->delete();
        \App\Membro::create([
            'user_id' => 1,
            'orquestra_id' => 1,
            'papel_id' => 1,
            'instrumento_id' => null,
        ]);


        \App\Membro::create([
            'user_id' => 1,
            'orquestra_id' => 1,
            'papel_id' => 4,
            'instrumento_id' => 2,
        ]);

        \App\Membro::create([
            'user_id' => 1,
            'orquestra_id' => 2,
            'papel_id' => 4,
            'instrumento_id' => 1,
        ]);

        \App\Membro::create([
            'user_id' => 1,
            'orquestra_id' => 1,
            'papel_id' => 4,
            'instrumento_id' => 1,
        ]);

        \App\Membro::create([
            'user_id' => 2,
            'orquestra_id' => 1,
            'papel_id' => 1,
            'instrumento_id' => null,
        ]);

        \App\Membro::create([
            'user_id' => 2,
            'orquestra_id' => 1,
            'papel_id' => 4,
            'instrumento_id' => 3,
        ]);

    }
}
