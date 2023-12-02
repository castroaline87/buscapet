<x-layout>
    <h1>Animais Para a Adoção</h1>

    <div id="scroller-animais" class="flex-scroller">

        <div class="flex-scroller-content gap-30">
            
            @foreach($anuncios as $anuncio)
            <a class="flex-col gap-10" href="/detalhes-adocao?id={{ $anuncio->id }}">
                <img class="img-pet" src="{{ $anuncio->fotos->first()?->imagem }}" alt="">
                <div class="content-center">
                    {{ $anuncio->observacoes }}
                </div>
            </a>
            @endforeach

        </div>

        <span class="flex-scroller-btn-back">&lsaquo;</span>
        <span class="flex-scroller-btn-next">&rsaquo;</span>

    </div>

    <!-- ver mais -->

    <div class="flex-row content-center">
        <a class="btn" href="/listagem-adocao">
            Ver mais...
        </a>
    </div>

</x-layout>