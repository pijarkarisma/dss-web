<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full items-center px-4 py-2 h-[50px] bg-dss-purple border border-transparent rounded-2xl align-middle font-medium text-lg text-white tracking-wide hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
