<x-layout title="Criança">
    <h1 class="text-berry mb-6 text-3xl">Criança</h1>

    <form method="POST" action="#" class="card max-w-xl">
        {{-- TODO (você): action, @csrf e @method('PUT') quando for edição --}}
        <x-field label="Nome" name="nome" />
        <x-field label="Data de nascimento" name="data_nascimento" type="date" />
        <x-field label="Cidade" name="cidade" />

        <div class="flex gap-4">
            <button type="submit" class="btn">Salvar</button>
            <a href="#" class="btn btn-alt">Cancelar</a>
        </div>
    </form>
</x-layout>
