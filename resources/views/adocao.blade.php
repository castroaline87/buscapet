<x-layout>
    <link rel="stylesheet" href="/css/detalhes-adocao.css">
    <h1>{{ $anuncio->observacoes }}</h1>

    <div class="flex-row gap-30 content-vcenter" id="box-pet-info">
        <img class="img-anuncio" src="{{ $anuncio->fotos->first()?->imagem }}" alt="">
        <div class="flex-row gap-30 grow">
            <div class="flex-col grow">
                <p><strong>Publicado em: </strong> 02/12/2023 </p>
                <p><strong>Espécie: </strong> {{ $anuncio->especie }} </p>
                <p><strong>Raça: </strong> {{ $anuncio->raca }} </p>
                <p><strong>Sexo: </strong> {{ $anuncio->sexo }} </p>
            </div>
            <div class="flex-col grow">
                <p><strong>Cor: </strong> {{ $anuncio->cor }} </p>
                <p><strong>Tamanho: </strong> {{ $anuncio->tamanho }} </p>
                <p><strong>Data de Nascimento: </strong> {{ date("d/m/Y", strtotime($anuncio->data_de_nascimento)) }} </p>
                <p><strong>Vacinado em: </strong> {{ date("d/m/Y", strtotime($anuncio->raiva_vacinado_em)) }} </p>
            </div>
        </div>
    </div>

    <div class="flex-row content-space-between gap-30">
        <div class="flex-row gap-30">
            <a href="" class="btn-alt" onclick="alert('Em breve...')">Compartilhar</a>    
            <a href="/listagem-adocao" class="btn-alt">Ver Outros</a>
        </div>
        <div class="flex-row gap-30">
            <a target="_blank" href="https://wa.me/5514999587456" class="btn">Quero Adotar!</a>
        </div>
    </div>

    <hr>

    <h2>Mais pets precisando de um lar:</h2>

    <div id="scroller-animais" class="flex-scroller">

        <!-- imagens do carrossel -->
        <div class="flex-scroller-content gap-30">
            
            @foreach($outrosAnuncios as $anuncio)
            <a class="flex-col gap-10" href="/detalhes-adocao/{{ $anuncio->id }}">
                <img class="img-pet" src="{{ $anuncio->fotoPrincipal() }}" alt="">
                <div class="content-center">
                    {{ $anuncio->observacoes }}
                </div>
            </a>
            @endforeach

        </div>

        <!-- setinhas -->
        <span class="flex-scroller-btn-back">&lsaquo;</span>
        <span class="flex-scroller-btn-next">&rsaquo;</span>

    </div>

</x-layout>