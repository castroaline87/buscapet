<x-layout>

    <h1 class="titulo">animais para a adoção</h1>

    <div id="scroller-animais" class="flex-scroller">

        <!-- imagens do carrossel -->
        <div class="flex-scroller-content gap-30">
            
            @foreach($anuncios as $anuncio)
            <div class="flex-col gap-10">
                <img class="img-pet" src="{{ $anuncio->fotos->first()?->imagem }}" alt="">
                <div class="content-center">
                    {{ $anuncio->observacoes }}
                </div>
            </div>
            @endforeach

        </div>

        <!-- setinhas -->
        <span class="flex-scroller-btn-back">&lsaquo;</span>
        <span class="flex-scroller-btn-next">&rsaquo;</span>

    </div>

    <!-- ver mais -->

    <a class="botao-ver-mais titulo content-center " href="/listagem-adocao">
        ver mais...
    </a>

    <div id="link-instrucoes" class="flex-row content-space-between">

        <a href="/dogsitter" class="card">
            <img src="/imagens/petsitter.png" alt="">
            <h1></h1>
            <p>esta em busca de um pet sitter ou quer ser um? clique aqui!
                ...</p>
        </a>

        <a href="/instrucoes" class="card">
            <img src="/imagens/animais de rua.png" alt="">
            <h1></h1>
            <p>instruções do que fazer com animais de rua!
                ...</p>
        </a>

        <a href="/imagens/doarumpet" class="card">
            <img src="/imagens/cat,dog.png" alt="">
            <h1></h1>
            <p>quer doar um pet? clique aqui!...</p>
        </a>

        <a href="/denuncias" class="card">
            <img src="/imagens/denuncia de maus tratos.png" alt="">
            <h1></h1>
            <p>denuncias de maus tratos. clique aqui!...</p>
        </a>

    </div>



</x-layout>