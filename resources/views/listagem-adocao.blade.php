<x-layout>

    <h1 class="titulo">animais para a adoção</h1>

    <form class="flex-row space-30 content-center" >
    <select name="especie" id="">
        <option value="" hidden selected disabled>Espécie</option>
        <option>Gato</option>
        <option>Cachorro</option>
    </select>
    
    <select name="sexo" id="">
        <option value="" hidden selected disabled>Sexo</option>
        <option>Macho</option>
        <option>Fêmea</option>
    </select>
    <select name="raca" id="">
        <option value="" hidden selected disabled>Raça</option>
        <option>Pedigree</option>
        <option>Vira-lata</option>
        <option>Ragdoll</option>
    </select>
    <select name="tamanho" id="">
        <option value="" hidden selected disabled>Tamanho</option>
        <option>Pequeno</option>
        <option>Grande </option>
       
    </select>
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