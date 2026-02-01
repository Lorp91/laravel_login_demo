@php use Illuminate\Support\Facades\Auth; @endphp

<x-layout>
    <h2>Moin, {{ Auth::user()->name }}</h2>
</x-layout>
