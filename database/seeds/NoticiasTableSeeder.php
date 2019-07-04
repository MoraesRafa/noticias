<?php

use Illuminate\Database\Seeder;

class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticias')->insert([
            'titulo'=>'Estudo aponta que WhatsApp pode ser benéfico para bem estar e relacionamentos',
            'slug'=>'estudo-aponta-que-whatsapp-pode-ser-benefico-para-bem-estar-e-relacionamentos-',
            'subtitulo'=>'',
            'descricao'=>'Duas pesquisadoras do Reino Unido lançaram um estudo nesta última terça-feira (2) que aponta que o WhatsApp pode ter um benefício na vida de usuários, sobretudo em relação a manter contato com pessoas próximas, à diminuição da solidão e ao bem estar como um todo.',
            'status'=>1,
            'categoria_id'=>1,
            'usuario_id'=>1
        ]);
        DB::table('noticias')->insert([
            'titulo'=>'É #FAKE mensagem que diz que instabilidade no WhatsApp foi provocada por decisão judicial',
            'slug'=>'e-fake-mensagem-que-diz-que-instabilidade-no-whatsapp-foi-provocada-por-decisao-judicial',
            'subtitulo'=>'Texto falso diz que aplicativo aguarda "parecer da Justiça para a normalização',
            'descricao'=>'frentados por usuários na utilização do WhatsApp nesta quarta-feira (3) são provocados por uma determinação judicial. O texto diz ainda que a normalização da ferramenta para o envio e o recebimento de imagens e áudios depende de um parecer da Justiça. A mensagem é #FAKE.',
            'status'=>'1',
            'categoria_id'=>'1',
            'usuario_id'=>'2'
        ]);
        DB::table('noticias')->insert([
            'titulo'=>'G. Jesus expõe incômodo com Casagrande e gera climão em entrevista ao vivo',
            'slug'=>'g-jesus-expoe-incomodo-com-casagrande-e-gera-climao-em-entrevista-ao-vivo',
            'subtitulo'=>'',
            'descricao'=>'Após brilhar em campo na vitória da seleção brasileira sobre a Argentina por 2 a 0 na noite desta terça-feira (2), o atacante Gabriel Jesus passou por situação embaraçosa na zona mista do estádio do Mineirão. Em entrevista ao vivo ao Sportv, o atacante expôs um incômodo com o comentarista Casagrande, da TV Globo',
            'status'=>'1',
            'categoria_id'=>'2',
            'usuario_id'=>'1'
        ]);
        DB::table('noticias')->insert([
            'titulo'=>'Corinthians entra na briga por Luciano após atacante do Flu ser oferecido',
            'slug'=>'g-jesuo-expoe-incomodo-com-casagrande-e-gera-climao-em-entrevista-ao-vivo',
            'subtitulo'=>'Texto falso diz que aplicativo aguarda "parecer da Justiça para a normalização',
            'descricao'=>'O atacante Luciano, do Fluminense, foi oferecido ao Corinthians. Segundo apurou a reportagem, o clube paulista gostou da ideia e avalia o retorno do atleta, que jogou no clube entre 2014 e 2016. No entanto, o Timão considera uma negociação complicada por conta do "excesso de empresários" envolvido nas tratativas. Além disso, Luciano interessa a São Paulo e Atlético-MG. O Flu espera ainda hoje um contato de Corinthians e Galo para negociar.',
            'status'=>'1',
            'categoria_id'=>'2',
            'usuario_id'=>'2'
        ]);
        DB::table('noticias')->insert([
            'titulo'=>'Velozes & Furiosos 9 anuncia novidades no elenco',
            'slug'=>'Velozes & Furiosos 9 anuncia novidades no elenco',
            'subtitulo'=>'Três atores se uniram ao novo filme da franquia estrelada por Vin Diesel.',
            'descricao'=>'Velozes & Furiosos 9 ganhou dois reforços no elenco. Finn Cole (Peaky Blinders), Anna Sawai (Ninja Assassino) e Vinnie Bennett (A Vigilante do Amanhã: Ghost in the Shell) se unirão a Vin Diesel & companhia no novo filme da franquia.',
            'status'=>'1',
            'categoria_id'=>'3',
            'usuario_id'=>'1'
        ]);
        DB::table('noticias')->insert([
            'titulo'=>'Biblioteca de Jundiaí recebe inscrições para curso gratuito de cinema e literatura',
            'slug'=>'biblioteca-de-jundiai-recebe-inscricoes-para-curso-gratuito-de-cinema-e-literatura',
            'subtitulo'=>'Interessados devem se cadastrar até o dia 15 de julho. Aulas serão sempre às terças-feiras, de 6 de agosto a 10 de dezembro; veja como participar.',
            'descricao'=>'As vagas são limitadas e as aulas serão realizadas de 6 de agosto a 10 de dezembro, sempre às terças-feiras, das 18h30 às 21h30. A idade mínima para participação é de 17 anos. As inscrições podem ser feitas até 15 de julho pela internet.',
            'status'=>'1',
            'categoria_id'=>'3',
            'usuario_id'=>'2'
        ]);
    }
}
