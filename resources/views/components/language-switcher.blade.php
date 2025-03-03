<div class="flex gap-2">
    @foreach ($locales as $locale)
        <button
            wire:click="setLocale('{{ $locale }}')"
            class="px-3 py-1 rounded {{ $currentLocale === $locale ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700' }}"
        >
            {{ strtoupper($locale) }}
        </button>
    @endforeach
</div>