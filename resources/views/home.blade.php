<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>treino do tcc</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-scroller.css">
    <script src="/flex-scroller.js"></script>
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <header class="flex-row content-vcenter space-10 content-space-between">
        <div class="flex-row gap-5  content-vcenter">
            <img id="logo" src="logo.svg" alt="">

            <!-- botão -->
            <a href="" id="logo-logo">
                <h1>
                    BuscaPet
                </h1>
            </a>
        </div>

        <!-- botão -->
        <a href="" class="botao-login">
            login

        </a>
    </header>

    <div class="flex-col grow space-30">

        <h1 class="titulo">animais para a adoção</h1>

        <div id="scroller-animais" class="flex-scroller">

            <!-- imagens do carrossel -->
            <div class="flex-scroller-content gap-30">
                <div class="flex-col gap-10">
                    <img src="/imagens/1cachorro.png" alt="">

                    <div class="content-center">
                        paschoal(porte médio) é um vira lata super dócil...
                    </div>
                </div>

                <div class="flex-col gap-10">
                    <img src="/imagens/2gato.png" alt="">

                    <div class="content-center">
                        figma é uma gatinha super curiosa...
                    </div>
                </div>

                <div class="flex-col gap-10">
                    <img src="/imagens/3cachorro.png" alt="">

                    <div class="content-center">
                        maximus (porte médio) é um vira lata muito divertido...
                    </div>
                </div>

                <div class="flex-col gap-10">
                    <img src="/imagens/4gato.png" alt="">

                    <div class="content-center">
                        zeus é um gato quieto e carinhoso...
                    </div>
                </div>

                <div class="flex-col gap-10">
                    <img src="/imagens/5cachorro.png" alt="">

                    <div class="content-center">
                        bilu é um filhote alegre e divertido...
                    </div>
                </div>

                <div class="flex-col gap-10">
                    <img src="/imagens/6gato.png" alt="">

                    <div class="content-center">
                        garfild é um gato preguiçoso e dorminhoco...
                    </div>
                </div>
            </div>

            <!-- setinhas -->
            <span class="flex-scroller-btn-back">&lsaquo;</span>
            <span class="flex-scroller-btn-next">&rsaquo;</span>

        </div>

        <!-- ver mais -->

        <a class="botao-ver-mais titulo content-center " href="Index.html">
            ver mais...
        </a>


        <div id="link-instrucoes" class="flex-row content-space-between content-center">
            <div class="texto">
                <div class="content-center">
                    instruções do que fazer com animais de rua
                </div>

                <img src="/imagens/animais de rua.png" alt="">
            </div>

            <div class="texto">
                <div class="content-center">
                    denuncia de maus tratos 
                </div>
                <img src="/imagens/maus tratos.png" alt="">
            </div>

            <div class="texto">
                <div class="content-center">
                    esta em busca de um dog sitter ou quer ser um ?
                </div>
                <img src="/imagens/dog sitter.png" alt="">
            </div>

            <div class="texto">
                <div class="content-center">
                    quer doar? clique aqui!
                </div>
                <img src="/imagens/dog,cat.png" alt="">
            </div>
        </div>

        <div id="posters" class="flex-row content-space-between content-center">
            <img src="" alt="">

        </div>























    </div>


    <footer id="rodape" class="flex-row content-center space-10">
        <div>BuscaPet 2023.Desenvolvido por: Bruna Vitória & Aline Castro</div>
    </footer>
</body>

</html>