<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contatos')->insert([
            'nome'=>'Rafael Moraes',
            'email'=>'rafael@email.com',
            'assunto'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit iste a.',
            'mensagem'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis culpa distinctio possimus ab consectetur labore cumque cupiditate reiciendis, quod tenetur eaque sunt rem? Provident quam earum sunt molestias eaque reprehenderit.'

        ]);
        DB::table('contatos')->insert([
            'nome'=>'Manuela Moraes',
            'email'=>'manuela@email.com',
            'assunto'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit iste a.',
            'mensagem'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis culpa distinctio possimus ab consectetur labore cumque cupiditate reiciendis, quod tenetur eaque sunt rem? Provident quam earum sunt molestias eaque reprehenderit.'

        ]);
        DB::table('contatos')->insert([
            'nome'=>'Luiza Moraes',
            'email'=>'luiza@email.com',
            'assunto'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit iste a.',
            'mensagem'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis culpa distinctio possimus ab consectetur labore cumque cupiditate reiciendis, quod tenetur eaque sunt rem? Provident quam earum sunt molestias eaque reprehenderit.'

        ]);
    }
}
