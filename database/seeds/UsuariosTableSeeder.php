<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nome'=>'Rafael Moraes',
            'email'=>'rafael@email.com',
            'password'=>bcrypt('12345678'),
            'permissao'=>2,
            'foto'=>'defaultUser.jpg',
            'perfil'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora nemo',
            'status'=>1
        ]);
        DB::table('usuarios')->insert([
            'nome'=>'Rafael Castro',
            'email'=>'castro@email.com',
            'password'=>bcrypt('12345678'),
            'permissao'=>0,
            'foto'=>'defaultUser.jpg',
            'perfil'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora nemo',

            'status'=>1
        ]);
    }
}
