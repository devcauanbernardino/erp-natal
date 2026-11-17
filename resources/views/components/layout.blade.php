@props(['title' => 'Polo Norte', 'fundo' => 'padrao.png', 'header' => true])
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} · ERP do Polo Norte</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex min-h-screen flex-col" style="background-image: url('{{ asset('images/' . $fundo) }}')">
    {{-- Header flutuante: cartão de vidro fosco, preso ao topo ao rolar --}}
    @if ($header)
    <header class="sticky top-0 z-20 px-4 pt-4">
        <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 rounded-2xl border border-gold/60 bg-snow/85 px-5 py-3 backdrop-blur-md"
             style="box-shadow: 0 4px 0 0 rgb(185 140 40 / 0.25)">
            <a href="/" class="group flex items-center gap-3">
                {{-- Selo do Polo Norte: floco de neve dentro de um círculo vermelho com aro dourado --}}
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-berry ring-2 ring-gold ring-offset-2 ring-offset-snow transition-transform group-hover:rotate-45">
                    <svg viewBox="0 0 24 24" class="h-5 w-5 text-snow" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M12 2v20M3.3 7l17.4 10M3.3 17L20.7 7M12 2l-2 2m2-2l2 2m-2 18l-2-2m2 2l2-2"/>
                    </svg>
                </span>
                <span class="leading-tight">
                    <span class="block font-display text-xl font-extrabold text-holly">Polo Norte</span>
                    <span class="block text-[11px] font-semibold uppercase tracking-[0.2em] text-berry">Oficina do Noel</span>
                </span>
            </a>

            {{-- Menu: os links/rotas e o controle por perfil (@can, @if role) ficam por sua conta.
                 Classe sugerida para cada link: "rounded-full px-3 py-1.5 hover:bg-holly/10"
                 e, no link ativo, "bg-holly text-snow" --}}
            <div class="flex items-center gap-4">
                <nav class="flex items-center gap-1 text-sm font-semibold text-holly">
                    {{ $nav ?? '' }}
                </nav>

                {{-- Usuário logado (avatar + nome). Quem preenche é cada tela/você, a partir do auth()->user() --}}
                {{ $usuario ?? '' }}

                {{-- Só aparece para quem está logado --}}
                @auth
                    <div class="flex items-center gap-3">
                        <span class="hidden text-sm font-semibold text-ink sm:inline">{{ auth()->user()->name }}</span>

                        {{-- Logout é POST (não link), por causa do CSRF --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="flex cursor-pointer items-center gap-1.5 rounded-full border border-berry/30 px-3 py-1.5 text-sm font-semibold text-berry transition hover:bg-berry hover:text-snow">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4" aria-hidden="true">
                                    <path d="M15 4h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-3"/><path d="M10 17l-5-5 5-5"/><path d="M5 12h11"/>
                                </svg>
                                Sair
                            </button>
                        </form>
                    </div>
                @endauth
            </div>
        </div>
    </header>
    @endif

    <main @class(['mx-auto w-full max-w-5xl flex-1 px-4 py-8', 'flex flex-col justify-center' => ! $header])>
        {{ $slot }}
    </main>

    <footer class="pb-8 text-center text-sm font-semibold {{ $fundo === 'padrao.png' ? 'text-holly' : 'text-snow' }}">
        ❄ Oficina do Papai Noel ❄
    </footer>
</body>
</html>
