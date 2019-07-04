<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([

            'nome'=>'Tecnologia',
            'slug'=>'tecnoloogia',
            'status'=>1

        ]);

        DB::table('categorias')->insert([
            'nome'=>'Esportes',
            'slug'=>'esportes',
            'status'=>1
        ]);

        DB::table('categorias')->insert([
            'nome'=>'Cinema',
            'slug'=>'cinema',
            'status'=>1

        ]);

    }
}
