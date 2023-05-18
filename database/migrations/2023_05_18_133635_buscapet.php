<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{

    public function up(): void
    {
        DB::statement("
           
        CREATE TABLE IF NOT EXISTS `usuario` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `nome` varchar(60) NOT NULL,
            `login` varchar(60) NOT NULL,
            `senha` varchar(300) NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

        ");

        DB::statement("
           
        CREATE TABLE IF NOT EXISTS `anuncio_adocao` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `especie` varchar(80) NOT NULL,
            `raca` varchar(80) NOT NULL,
            `sexo` varchar(80) NOT NULL,
            `raiva_vacinado_em` varchar(80) NOT NULL,
            `cor` varchar(80) NOT NULL,
            `tamanho` varchar(80) NOT NULL,
            `data_de_nascimento` varchar(80) NOT NULL,
            `observacoes` varchar(100) NOT NULL,
            `id_usuario` int(11) NOT NULL,
            PRIMARY KEY (`id`),
            KEY `fk_usuario_anuncio_adocao` (`id_usuario`),
            CONSTRAINT `fk_usuario_anuncio_adocao` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
          

        ");
        DB::statement("
           
        CREATE TABLE IF NOT EXISTS `foto_anuncios` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `imagem` varchar(200) NOT NULL,
            `id_anuncio_adocao` int(11) NOT NULL,
            PRIMARY KEY (`id`),
            KEY `fk_anuncio_adocao_foto_anuncios` (`id_anuncio_adocao`),
            CONSTRAINT `fk_anuncio_adocao_foto_anuncios` FOREIGN KEY (`id_anuncio_adocao`) REFERENCES `anuncio_adocao` (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
          

        ");
    }

    public function down(): void
    {
        DB::statement("
        DROP TABLE IF EXISTS `foto_anuncios`;
        ");
        DB::statement("
        DROP TABLE IF EXISTS `anuncio_adocao`;
        ");
        DB::statement("
        DROP TABLE IF EXISTS `usuario`;
        ");
    }
};