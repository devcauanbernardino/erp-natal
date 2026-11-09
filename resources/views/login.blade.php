<x-layout title="Entrar">
    <div class="mx-auto max-w-md">
        <h1 class="text-berry mb-6 text-center text-3xl">Feliz Natal!</h1>
        <p class="mb-6 text-center">Entre para acessar a oficina.</p>

        <form method="POST" action="#" class="card">
            {{-- TODO (você): action da rota de login e @csrf --}}
            <x-field label="E-mail" name="email" type="email" autofocus />
            <x-field label="Senha" name="password" type="password" />

            <button type="submit" class="btn w-full">Entrar</button>
        </form>
    </div>
</x-layout>
