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


<div>
    <p class="instrucoes">Tendo em vista esse panorama, separamos algumas dicas que podem ajudar você, que quer fazer mais por esses bichinhos e não sabe como, sem nem mesmo precisar colocar a mão no bolso. Confira a lista abaixo: <br>
<br>
1. Tire o pet do meio da rua
Se você perceber que o cachorro ou gato está no meio da via, correndo perigo de vida, tente removê-lo de lá o mais rápido possível. Muita gente fica desesperada e sai à procura de alguma ajuda, mas pode ser tarde e é comum esses pets serem atropelados. <br>
<br>
2. Leve-o até o veterinário mais próximo
Esses bichinhos estão expostos a inúmeros agentes infecciosos e corpos estranhos. O ideal é que pelo menos sejam vacinados e tomem vermífugos. Várias clínicas veterinárias fazem esse serviço de graça ou oferecem um bom desconto. Se for possível, leve o animal ao médico mais próximo! <br>
<br>
3. Procure ajuda de Organizações Não Governamentais (ONGs)
Há muitas ONGs que fazem trabalhos maravilhosos com os amiguinhos abandonados. Você pode tanto se candidatar para ser um voluntário, como procurar essas instituições para resgatar os animais. Um dos problemas dessa ação é que essas ONGs recebem pedidos de ajuda diariamente e muitas não dão mais conta. <br>
<br>
4. Divulgue nas redes sociais
As mídias sociais e a Internet têm um poder incrível para o bem. Assim como muitos postam fotos e acontecimentos cotidianos, é possível usar esse meio para divulgar casos de animais de rua e inclusive chamar atenção de instituições e pessoas dispostas a ajudar. <br>
<br>
5. Apadrinhe um animalzinho
Também dá para ser padrinho ou madrinha de um pequeno amiguinho. Isso nada mais é do que apadrinhar um pet enquanto ele não ganha um lar. Inclusive, se você tem condições de manter o animalzinho por um tempo na sua casa, pode ser um tutor temporário, até alguém de fato querê-lo. O difícil é não se apegar ao bichinho enquanto ele vive junto! <br>
<br>
6. Dê comida e água
Em algumas cidades e bairros específicos existem bebedouros e comedouros perto dos animais de rua. Assim, quando a pessoa tiver um pouco de ração para oferecer é só colocar lá. Muitos desses pets ficam desnutridos e, além de precisarem de carinho, necessitam do básico para sobreviver, como água, comida e amor! <br>

</p>
</div>

</x-layout>