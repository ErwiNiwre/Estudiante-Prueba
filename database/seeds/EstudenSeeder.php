<?php

use Illuminate\Database\Seeder;

class EstudenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('estudent')->insert([
        	'ci' => '4542317'
            'nombre' => 'Duilio',
            'apellido' => 'Palacios',
            'genero' => 'Masculino',
            'profession_id' => $professionId
        ]);
        DB::table('estudent')->insert([
            'name' => 'Duilio Palacios',
            'email' => 'duilio@styde.net',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId
        ]);
    }
}
