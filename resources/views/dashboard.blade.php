<x-layout title="Início">
    {{-- TODO (você): avatar do usuário logado no header:
         <x-slot:usuario> <x-usuario-menu personagem="..." nome="..." perfil="..." /> </x-slot:usuario> --}}

    {{-- Boas-vindas --}}
    <section class="card mb-8 flex flex-col items-center gap-6 md:flex-row">
        <x-personagem nome="noel" pose="joinha" tamanho="lg" />
        <div>
            <p class="font-semibold uppercase tracking-[0.2em] text-berry text-xs">Bem-vindo de volta</p>
            <h1 class="mb-2 text-4xl">Ho ho ho!</h1> {{-- TODO (você): nome do usuário logado --}}
            <p class="text-muted">Veja como anda a oficina hoje.</p>
        </div>
    </section>

    {{-- TODO (você): mensagens vindas de session() / $errors, por exemplo:
         <x-alerta tipo="sucesso">mensagem</x-alerta>  ou  <x-alerta tipo="erro">mensagem</x-alerta> --}}

    {{-- Atalhos por área. TODO (você): href das rotas e, se quiser, contadores --}}
    <div class="mb-8 grid gap-6 md:grid-cols-3">
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="noel" pose="lendo-carta" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Cartas</h2>
            <p class="text-sm text-muted">Pedidos das crianças</p>
        </a>
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="mamae-noel" pose="prancheta" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Avaliações</h2>
            <p class="text-sm text-muted">Comportamento do ano</p>
        </a>
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="duende" pose="montando-brinquedo" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Produção</h2>
            <p class="text-sm text-muted">Ordens de produção</p>
        </a>
    </div>
</x-layout>
