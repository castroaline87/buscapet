<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            insert  into `usuario`(`nome`,`login`,`senha`) values 
            ('Aline Castro', 'aline', 'aline');
        ");

        DB::statement("
            insert  into `anuncio_adocao` (`especie`,`raca`,`sexo`,`raiva_vacinado_em`,`cor`,`tamanho`,`data_de_nascimento`,`observacoes`,`id_usuario`) values 
            ('Cachorro','Vira-lata','Macho','2023-08-24','caramelo','Grande' ,'2023-08-24','Dócil e gentil',3),
            ('Gato','Radgoll','Fêmea','2023-08-24','Branco amarronzado','Médio','2023-08-24','Gentil e amável',3),
            ('Cachorro','Vira-lata','Fêmea','2023-08-24','Preta' ,'Grande' ,'2023-08-24','Tranquilo',3),
            ('Gato','Radgoll','Macho','2023-08-24','Branco com listras laranjas' ,'Pequeno','2023-08-24','Amigável',3),
            ('Cachorro','Vira-lata','Macho' ,'2023-08-24','Branco com laranja','Médio','2023-08-24','Prestativo',3),
            ('Gato','Radgoll','Fêmea','2023-08-24','ruiva','Pequeno','2023-08-24','Amigável',3);
        ");

        DB::statement("
            insert  into `foto_anuncios`(`imagem`,`id_anuncio_adocao`) values 
            ('/imagens/1cachorro.png',1),
            ('/imagens/2gato.png',2),
            ('/imagens/3cachorro.png',3),
            ('/imagens/4gato.png',4),
            ('/imagens/5cachorro.png',5),
            ('/imagens/6gato.png',6);
        ");
    }

    public function down(): void
    {
        DB::statement("
            DROP TABLE IF EXISTS genero
        ");
    }
};
