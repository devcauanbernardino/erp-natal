<x-layout title="Crianças">
    <x-hero imagem="oficina.png" titulo="Crianças" subtitulo="Quem está na lista do Papai Noel" foco="center 60%">
        <a href="#" class="btn btn-alt">+ Nova criança</a>
    </x-hero>

    <div class="card overflow-x-auto">
        <table class="w-full text-left">
            <thead class="border-b border-line text-sm text-muted">
                <tr>
                    <th class="p-3">Nome</th>
                    <th class="p-3">Nascimento</th>
                    <th class="p-3">Cidade</th>
                    <th class="p-3"></th>
                </tr>
            </thead>
            <tbody>
                {{-- TODO (você): trocar este exemplo por @forelse ($criancas as $crianca) --}}
                <tr class="border-b border-line">
                    <td class="p-3">Exemplo da Silva</td>
                    <td class="p-3">12/03/2016</td>
                    <td class="p-3">Rovaniemi</td>
                    <td class="p-3 text-right">
                        <a href="#" class="font-medium text-holly hover:underline">editar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
