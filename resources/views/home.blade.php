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


    <div id="link-instrucoes" class="flex-row content-space-between content-center">

        <div class="texto">

            <div class="content-center">
                esta em busca de um pet sitter ou quer ser um? clique aqui!
            </div>

            <a href="/dogsitter">


                <img src="/imagens/petsitter.png" alt="">
            </a>
        </div>

        <div class="texto">
            <div class="content-center">
                instruções do que fazer com animais de rua
            </div>

            <a href="/instrucoes">
                <img src="/imagens/animais de rua.png" alt="">

            </a>

        </div>

        <div class="texto">
            <div class="content-center">
                quer doar um pet? clique aqui!
            </div>
            <a href="/imagens/doarumpet">

                <img src="/imagens/dog,cat.png" alt="">

            </a>
        </div>

    </div>


    <div id="denuncia" class="flex-row content-left content-center">


        <div class="texto">
            <a href="/denuncias">
                <img src="/imagens/3.png" alt="">

            </a>

        </div>

        <div class="seta">
            <span class="material-symbols-outlined">
                line_start_arrow_notch
            </span>
        </div>

        <div class="texto">
            <div class="titulo content-center">
                denuncie
            </div>

        </div>
    </div>



</x-layout>