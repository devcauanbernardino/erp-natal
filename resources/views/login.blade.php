<x-layout title="Entrar" fundo="papai-noel.png">
    <div class="mx-auto max-w-md md:mt-6">
        {{-- Duende "espiando" por cima do cartão --}}
        <div class="relative z-10 -mb-6 flex justify-center">
            <x-personagem nome="duende" pose="acenando" tamanho="sm" class="h-28" />
        </div>

        <form method="POST" action="#" class="card pt-8">
            {{-- TODO (você): action da rota de login e @csrf --}}
            <h1 class="mb-1 text-center text-3xl">Feliz Natal!</h1>
            <p class="mb-6 text-center text-muted">Entre para acessar a oficina.</p>

            <x-field label="E-mail" name="email" type="email" autofocus />
            <x-field label="Senha" name="password" type="password" />

            <button type="submit" class="btn w-full">Entrar</button>
        </form>
    </div>
</x-layout>
