<x-layout>
    <form action="{{ route('register.store') }}" method="POST" class="space-y-6 min-w-lg">
        @csrf

        <h3 class="text-2xl font-semibold text-center">Registrierung</h3>

        <x-form.field name="name" label="Name"/>
        <x-form.field type="email" name="email" label="E-Mail"/>
        <x-form.field type="password" name="password" label="Passwort"/>

        <div class="mt-8 justify-self-end space-x-4">
            <a href="{{ route('home') }}">Abbrechen</a>
            <button type="submit"
                    class="px-3 py-2 bg-blue-500 hover:bg-blue-400 border border-blue-400 rounded-lg cursor-pointer">
                Registrieren
            </button>
        </div>
    </form>
</x-layout>
