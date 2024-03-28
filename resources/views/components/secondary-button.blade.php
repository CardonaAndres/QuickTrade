<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-green-900 rounded-md font-semibold text-sm text-gray-900 uppercase tracking-widest shadow-sm hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-900 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
