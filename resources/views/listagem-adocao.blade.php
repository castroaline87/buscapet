<x-layout>

    <link rel="stylesheet" href="/css/listagem-adocao.css">

    <h1 class="titulo">animais para a adoção</h1>

    <form class="flex-row space-30 content-center" >

        <div class="flex-col">
            <label for="">Espécie</label>
            <select name="especie" id="">
                <option value=""></option>
                <option>Gato</option>
                <option>Cachorro</option>
            </select>
        </div>
        
        <div class="flex-col">
            <label for="">Sexo</label>
            <select name="sexo" id="">
                <option value=""></option>
                <option>Macho</option>
                <option>Fêmea</option>
            </select>
        </div>

        <div class="flex-col">
            <label for="">Raça</label>
            <select name="raca" id="">
                <option value=""></option>
                <option>Pedigree</option>
                <option>Vira-lata</option>
                <option>Ragdoll</option>
            </select>
        </div>

        <div class="flex-col">
            <label for="">Tamanho</label>
            <select name="tamanho" id="">
                <option value=""></option>
                <option>Pequeno</option>
                <option>Grande </option>        
            </select>
        </div>

        <button>Buscar</button>
    </form>

    <div class="flex-row space-30 content-center">
        @foreach($anuncios as $anuncio)
        <div class="flex-col gap-10">
            <img src="{{ $anuncio->fotos->first()?->imagem }}" alt="">
            <span>{{ $anuncio->observacoes }}</span>
        </div>
        @endforeach
    </div>
    

</x-layout>