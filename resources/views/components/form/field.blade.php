@props([
    'type' => 'text',
    'name',
    'label',
    'value' => null
])

<div>
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-white">{{ $label }}</label>
    <div class="mt-2">
        <input
            id="{{ $name }}"
            type="{{ $type }}"
            name="{{ $name }}"
            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
            value="{{ old($name, $value) }}"
            {{ $attributes }}
        />
    </div>

    @error($name)
    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
    @enderror
</div>
