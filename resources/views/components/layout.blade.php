<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tcc</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/css/flex.css">
    <link rel="stylesheet" href="/css/flex-style.css">
    <link rel="stylesheet" href="/css/flex-scroller.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="/flex-scroller.js"></script>
    <script src="/js/layout.js"></script>
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

        <div id="cabecalhodireito">
            
            <a href="/perto-de-mim">
                <img class="maps" src="/imagens/local.svg" alt="">
            </a>

            <!-- botão -->
            <!-- <a href="/login" class="botao-login">
                login
            </a> -->
        </div>
    </header>

    <main id="main-content" class="flex-col grow space-30">
        {{ $slot }}
    </main>

    <hr>
    <div id="link-instrucoes" class="flex-row content-space-between">

        <a href="/dogsitter" class="card">
            <img src="/imagens/petsitter.png" alt="">
            <h1></h1>
            <p>Está em busca de um pet sitter ou quer ser um? clique aqui!</p>
        </a>

        <a href="/instrucoes" class="card">
            <img src="/imagens/animais de rua.png" alt="">
            <h1></h1>
            <p>Veja o que fazer ao encontrar um animal de rua.</p>
        </a>

        <a target="_blank" href="https://www.webdenuncia.org.br/depa" class="card">
            <img src="/imagens/denuncia de maus tratos.png" alt="">
            <h1></h1>
            <p>Saiba como denunciar maus tratos.</p>
        </a>

        <a href="/perto-de-mim" class="card">
            <img src="/imagens/cat-dog.png" alt="">
            <h1></h1>
            <p>Conheça os petshops e veterinárias perto de você.</p>
        </a>

    </div>

    <footer id="rodape" class="flex-row content-center space-10">
        <div>BuscaPet 2023.Desenvolvido por: Bruna Vitória & Aline Castro</div>
    </footer>

</body>
</html>