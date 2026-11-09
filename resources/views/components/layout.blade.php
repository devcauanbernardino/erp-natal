@props(['title' => 'Polo Norte'])
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
<body class="min-h-screen">
    <header class="bg-berry">
        <div class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-4 py-4">
            <a href="/" class="font-display text-2xl font-extrabold text-snow">
                🎄 Polo Norte <span class="text-gold">★</span>
            </a>

            {{-- Menu: os links/rotas e o controle por perfil (@can, @if role) ficam por sua conta --}}
            <nav class="flex gap-5 text-sm font-semibold text-snow">
                {{ $nav ?? '' }}
            </nav>
        </div>
        <div class="lights"></div>
    </header>

    <main class="mx-auto max-w-5xl px-4 py-10">
        {{ $slot }}
    </main>

    <footer class="pb-8 text-center text-sm font-semibold text-holly">
        ❄ Oficina do Papai Noel ❄
    </footer>
</body>
</html>
