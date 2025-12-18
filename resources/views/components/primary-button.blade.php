<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-3 bg-oro-400 border border-transparent rounded-3xl text-base text-gris-100 tracking-widest hover:bg-oro-500 focus:bg-oro-700 active:bg-oro-600 focus:outline-none focus:ring-2 focus:ring-oro-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
