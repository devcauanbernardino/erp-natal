{{-- Campo de formulário com label, ícone opcional, mostrar/ocultar senha e erro.
     Uso: <x-field label="E-mail" name="email" type="email" icone="email" placeholder="voce@polonorte.com" /> --}}
@props(['label', 'name', 'type' => 'text', 'icone' => null])
@php
    $temErro = $errors->has($name);
    $ehSenha = $type === 'password';

    $icones = [
        'email' => '<path d="M4 6h16v12H4z"/><path d="m4 7 8 6 8-6"/>',
        'senha' => '<rect x="5" y="11" width="14" height="9" rx="2"/><path d="M8 11V8a4 4 0 0 1 8 0v3"/>',
        'pessoa' => '<circle cx="12" cy="8" r="4"/><path d="M4 20a8 8 0 0 1 16 0"/>',
        'cidade' => '<path d="M12 21s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/>',
        'data' => '<rect x="4" y="5" width="16" height="15" rx="2"/><path d="M4 10h16M9 3v4M15 3v4"/>',
    ];
@endphp

<div class="mb-5">
    <label for="{{ $name }}" class="mb-1.5 block text-sm font-semibold text-ink">{{ $label }}</label>

    <div class="relative">
        @if ($icone && isset($icones[$icone]))
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="pointer-events-none absolute top-1/2 left-3 h-5 w-5 -translate-y-1/2 {{ $temErro ? 'text-berry' : 'text-muted' }}"
                 aria-hidden="true">{!! $icones[$icone] !!}</svg>
        @endif

        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
               value="{{ $ehSenha ? '' : old($name) }}"
               @if ($temErro) aria-invalid="true" aria-describedby="{{ $name }}-erro" @endif
               {{ $attributes->class([
                   'input',
                   'pl-10' => $icone,
                   'pr-11' => $ehSenha,
                   'input-erro' => $temErro,
               ]) }}>

        @if ($ehSenha)
            {{-- Botão de mostrar/ocultar senha --}}
            <button type="button"
                    class="absolute top-1/2 right-2 flex h-8 w-8 -translate-y-1/2 cursor-pointer items-center justify-center rounded-md text-muted transition hover:bg-holly/10 hover:text-holly"
                    aria-label="Mostrar senha"
                    onclick="
                        const campo = document.getElementById('{{ $name }}');
                        const mostrar = campo.type === 'password';
                        campo.type = mostrar ? 'text' : 'password';
                        this.setAttribute('aria-label', mostrar ? 'Ocultar senha' : 'Mostrar senha');
                        this.querySelector('[data-olho=aberto]').classList.toggle('hidden', mostrar);
                        this.querySelector('[data-olho=fechado]').classList.toggle('hidden', !mostrar);
                    ">
                <svg data-olho="aberto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5" aria-hidden="true">
                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/>
                </svg>
                <svg data-olho="fechado" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="hidden h-5 w-5" aria-hidden="true">
                    <path d="M3 3l18 18"/><path d="M10.6 5.1A10 10 0 0 1 12 5c6.5 0 10 7 10 7a17 17 0 0 1-3.2 4.2M6.6 6.6C3.8 8.4 2 12 2 12s3.5 7 10 7a9.7 9.7 0 0 0 5.4-1.6"/><path d="M9.9 9.9a3 3 0 0 0 4.2 4.2"/>
                </svg>
            </button>
        @endif
    </div>

    @error($name)
        <p id="{{ $name }}-erro" class="mt-1.5 flex items-center gap-1.5 text-sm font-medium text-berry">
            <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 shrink-0" aria-hidden="true">
                <path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 5a1.2 1.2 0 0 1 1.2 1.2v4.6a1.2 1.2 0 0 1-2.4 0V8.2A1.2 1.2 0 0 1 12 7zm0 10.6a1.4 1.4 0 1 1 0-2.8 1.4 1.4 0 0 1 0 2.8z"/>
            </svg>
            {{ $message }}
        </p>
    @enderror
</div>
