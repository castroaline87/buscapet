<x-layout>

    <h1 class="titulo">oque fazer com animais de rua</h1>

    <div class="carrosel">
        @foreach($usuarios as $u)
        <div class="card">
            <img src="{{ $u->imagem }}" alt="">
            <h1>{{ $u->nome }}</h1>
            <p>{{ $u->email }}</p>
        </div>
        @endforeach
    </div>
</x-layout>