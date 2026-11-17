<x-layout title="Entrar" fundo="login.png" :header="false">
    {{-- "group" permite que os personagens reajam ao foco nos campos do formulário --}}
    <div class="group relative mx-auto w-full max-w-md">

        {{-- Papai Noel em cima do cartão: com a chave e, ao digitar a senha, fazendo "shhh" --}}
        {{-- As duas imagens ficam empilhadas no mesmo lugar; a troca é feita com opacidade + escala + leve giro --}}
        <div class="relative z-20 mx-auto -mb-8 h-32 w-36">
            <x-personagem nome="noel" pose="chave" tamanho="sm"
                          class="absolute inset-x-0 bottom-0 mx-auto h-32 origin-bottom transition duration-300 ease-out motion-reduce:transition-none
                                 group-has-[#password:focus]:-rotate-6 group-has-[#password:focus]:scale-75 group-has-[#password:focus]:opacity-0" />
            <x-personagem nome="noel" pose="shhh" tamanho="sm"
                          class="absolute inset-x-0 bottom-0 mx-auto h-32 origin-bottom rotate-6 scale-75 opacity-0 transition duration-300 ease-out motion-reduce:transition-none
                                 group-has-[#password:focus]:rotate-0 group-has-[#password:focus]:scale-100 group-has-[#password:focus]:opacity-100" />
        </div>

        {{-- Papai Noel espiando por trás da borda direita do cartão (só em telas grandes) --}}
        <x-personagem nome="noel" pose="espiando" tamanho="lg"
                      class="pointer-events-none absolute top-1/3 left-full z-0 -ml-5 hidden h-60 lg:block" />

        <form method="POST" action="{{ route('login') }}" class="card relative z-10 pt-10">
            @csrf
            <h1 class="mb-1 text-center text-3xl">Feliz Natal!</h1>
            <p class="mb-6 text-center text-muted">Entre para acessar a oficina.</p>

            <x-field label="E-mail" name="email" type="email" icone="email"
                     placeholder="voce@polonorte.com" autocomplete="email" autofocus />
            <x-field label="Senha" name="password" type="password" icone="senha"
                     placeholder="Sua senha" autocomplete="current-password" />

            <button type="submit" class="btn mt-2 w-full py-3 text-base">Entrar na oficina</button>
        </form>
    </div>
</x-layout>
