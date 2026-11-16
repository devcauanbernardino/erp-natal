{{-- Avatar + nome + perfil no canto do header.
     Uso: <x-usuario-menu personagem="noel" nome="Nicolau" perfil="Papai Noel" /> --}}
@props(['personagem', 'nome', 'perfil'])
<div class="flex items-center gap-3 border-l border-gold/50 pl-4">
    <x-avatar :personagem="$personagem" tamanho="sm" />
    <div class="hidden leading-tight sm:block">
        <p class="text-sm font-semibold text-ink">{{ $nome }}</p>
        <p class="text-xs text-muted">{{ $perfil }}</p>
    </div>
</div>
