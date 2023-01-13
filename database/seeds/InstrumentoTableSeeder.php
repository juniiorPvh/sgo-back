<?php

use Illuminate\Database\Seeder;

class InstrumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrumentos')->delete();
        DB::table('instrumentos')->insert( [
            // 'id' => 1,
            'name' => 'Sax Tenor - 1º',
            'tonality' => 'B♭',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('instrumentos')->insert( [
            'name' => 'Trombone de vara - 1º',
            'tonality' => 'B♭',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('instrumentos')->insert( [
            'name' => 'Sax Alto - 1º',
            'tonality' => 'E♭',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('instrumentos')->insert( [
            'name' => 'Violino - 1º',
            'tonality' => 'Dó',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('instrumentos')->insert( [
            'name' => 'Flauta Transversal - 1º',
            'tonality' => 'Dó',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

        DB::table('instrumentos')->insert( [
            'name' => 'Clarinete - 1º',
            'tonality' => 'Dó',
            'description' => '',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

    }
}
