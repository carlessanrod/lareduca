<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-row gap-1 items-center justify-center px-4 py-2 bg-red-400 rounded-lg font-medium text-black tracking-wide hover:bg-red-600 transition-all duration-300']) }}>
    {{ $slot }}
</button>
