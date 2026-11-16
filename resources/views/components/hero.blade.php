{{-- Banner ilustrado no topo da página. Uso: <x-hero imagem="oficina.png" titulo="Crianças">ações opcionais</x-hero> --}}
@props(['imagem', 'titulo', 'subtitulo' => null, 'foco' => 'center'])
<section class="relative mb-8 overflow-hidden rounded-2xl border-2 border-gold"
         style="box-shadow: 0 6px 0 0 rgb(185 140 40 / 0.35)">
    <img src="{{ asset('images/' . $imagem) }}" alt=""
         class="h-48 w-full object-cover md:h-60" style="object-position: {{ $foco }}">

    {{-- Degradê escuro embaixo para o título ficar legível --}}
    <div class="absolute inset-0 bg-linear-to-t from-black/70 via-black/20 to-transparent"></div>

    <div class="absolute inset-x-0 bottom-0 flex flex-wrap items-end justify-between gap-4 p-6">
        <div>
            <h1 class="text-3xl text-snow md:text-4xl">{{ $titulo }}</h1>
            @if ($subtitulo)
                <p class="mt-1 text-snow/90">{{ $subtitulo }}</p>
            @endif
        </div>
        {{ $slot }}
    </div>
</section>
