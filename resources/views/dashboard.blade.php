<x-layout title="Início">
    {{-- TODO (você): nome, perfil e personagem vêm do usuário logado --}}
    <x-slot:usuario>
        <x-usuario-menu personagem="noel" nome="Nicolau" perfil="Papai Noel" />
    </x-slot:usuario>

    {{-- Boas-vindas --}}
    <section class="card mb-8 flex flex-col items-center gap-6 md:flex-row">
        <x-personagem nome="noel" pose="joinha" tamanho="lg" />
        <div>
            <p class="font-semibold uppercase tracking-[0.2em] text-berry text-xs">Bem-vindo de volta</p>
            <h1 class="mb-2 text-4xl">Ho ho ho, Nicolau!</h1>
            <p class="text-muted">Faltam <strong class="text-ink">39 dias</strong> para o Natal. Veja como anda a oficina hoje.</p>
        </div>
    </section>

    {{-- Exemplos de mensagens (no sistema real virão de session() / $errors) --}}
    <x-alerta tipo="sucesso">Ordem "Carrinho de madeira" marcada como pronta!</x-alerta>
    <x-alerta tipo="erro">Não foi possível salvar a carta. Confira os campos.</x-alerta>

    {{-- Atalhos por área, cada uma com seu personagem --}}
    <div class="mb-8 grid gap-6 md:grid-cols-3">
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="noel" pose="lendo-carta" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Cartas</h2>
            <p class="text-sm text-muted">12 aguardando análise</p>
        </a>
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="mamae-noel" pose="prancheta" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Avaliações</h2>
            <p class="text-sm text-muted">5 crianças para avaliar</p>
        </a>
        <a href="#" class="card flex flex-col items-center text-center transition-transform hover:-translate-y-1">
            <x-personagem nome="duende" pose="montando-brinquedo" tamanho="md" class="mb-3" />
            <h2 class="text-xl">Produção</h2>
            <p class="text-sm text-muted">8 ordens fabricando</p>
        </a>
    </div>

    {{-- Exemplo de estado vazio --}}
    <x-estado-vazio personagem="mamae-noel" pose="biscoitos" titulo="Nenhuma entrega ainda">
        As entregas aparecem aqui quando a logística estiver pronta. Enquanto isso, biscoitos?
        <x-slot:acao>
            <a href="#" class="btn btn-alt">Ver cartas</a>
        </x-slot:acao>
    </x-estado-vazio>
</x-layout>
