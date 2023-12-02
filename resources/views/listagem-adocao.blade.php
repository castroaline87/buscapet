<x-layout>
    <link rel="stylesheet" href="/css/listagem-adocao.css">

    <h1 class="titulo">animais para a adoção</h1>

    <form class="flex-row space-30 content-center" >

        <div class="flex-col">
            <label for="">Espécie</label>
            <select name="especie" id="">
                <option value=""></option>
                @foreach($especies as $e)
                    <option>{{ $e }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="flex-col">
            <label for="">Sexo</label>
            <select name="sexo" id="">
                <option value=""></option>
                @foreach($sexos as $s)
                    <option>{{ $s }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex-col">
            <label for="">Raça</label>
            <select name="raca" id="">
                <option value=""></option>
                @foreach($racas as $r)
                    <option>{{ $r }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex-col">
            <label for="">Tamanho</label>
            <select name="tamanho" id="">
                <option value=""></option>
                @foreach($tamanhos as $t)
                    <option>{{ $t }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex-col">
            <label>&nbsp;</label>
            <button class="btn">Buscar</button>
        </div>
        
    </form>

    @if($anuncios->isEmpty())
    <div class="flex-row content-center">
        <span>Nenhum resultado encontrado</span>
    </div>
    @endif

    <div class="flex-row space-30 content-center">
        @foreach($anuncios as $anuncio)
        <div class="flex-col gap-10">
            <img src="{{ $anuncio->fotos->first()?->imagem }}" alt="">
            <span>{{ $anuncio->observacoes }}</span>
        </div>
        @endforeach
    </div>
    

</x-layout>