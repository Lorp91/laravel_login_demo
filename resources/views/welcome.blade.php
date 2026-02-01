<x-layout>
    <h3 class="text-2xl font-bold">Home Page</h3>

    @auth
        <a href="{{ route('greeting') }}" class="block mt-4 px-2 py-3 bg-green-600 rounded-lg text-center cursor-pointer hover:bg-green-400">zu /greeting</a>
    @endauth
</x-layout>
