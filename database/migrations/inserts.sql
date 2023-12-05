INSERT  INTO `usuario`(`id`,`nome`,`login`,`senha`) VALUES 
(3,'aline','aline','aline');

INSERT  INTO `anuncio_adocao`(`id`,`especie`,`raca`,`sexo`,`raiva_vacinado_em`,`cor`,`tamanho`,`data_de_nascimento`,`observacoes`,`id_usuario`) VALUES 
(1,'cachorro','vira-lata' ,'macho','2023-08-24','caramelo','grande','2023-08-24','docil e gentil',3),
(2,'gato','radgoll','femea','2023-08-24','branco' 'amarronzado','medio','2023-08-24','gentil e amavel',3),
(3,'cachorro', 'vira-lata','femea','2023-08-24', 'preta', 'grande', '2023-08-24','tranquilo',3),
(4,'gato','radgoll','macho','2023-08-24','branco com listras laranjas','pequeno','2023-08-24','amigavel',3),
(5,'cachorro', 'vira-lata','macho','2023-08-24','branco com laranja','medio','2023-08-24','prestativo',3),
(6,'gato','radgoll','femea','2023-08-24','ruiva','pequeno','2023-08-24','amigavel',3);

INSERT  INTO `foto_anuncios`(`id`,`imagem`,`id_anuncio_adocao`) VALUES 
(3,'/imagens/1cachorro.png',1),
(5,'/imagens/2gato.png',2),
(6,'/imagens/3cachorro.png',3),
(7,'/imagens/4gato.png',4),
(8,'/imagens/5cachorro.png',5),
(9,'/imagens/6gato.png',6);

