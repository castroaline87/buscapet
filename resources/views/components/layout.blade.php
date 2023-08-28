<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tcc</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-scroller.css">
    <script src="/flex-scroller.js"></script>
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <header class="flex-row content-vcenter space-10 content-space-between">
        <div class="flex-row gap-5  content-vcenter">
            <img id="logo" src="logo.svg" alt="">

            <!-- botão -->
            <a href="/" id="logo-logo">
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

        {{ $slot }}
    </div>

    <div id="parcerias" class="flex-row content-space-between content-center">
        <div class="posters">
            <div class="content-center">

                <a href="https://adotar.com.br/quem-somos.aspx" target="_blank">

                    <img src="/imagens/adote.png" alt="">

                </a>

            </div>

        </div>

        <div class="posters">
            <div class="content-center">

                <a href="https://www.amigonaosecompra.com.br" target="_blank">
                    <img src="/imagens/amigo.png" alt="">

                </a>

            </div>

        </div>
    </div>

    <footer id="rodape" class="flex-row content-center space-10">
        <div>BuscaPet 2023.Desenvolvido por: Bruna Vitória & Aline Castro</div>
    </footer>

</body>

</html>