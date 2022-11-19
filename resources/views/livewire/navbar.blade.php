<div class="py-12 flex w-full justify-between items-center">
    <div>
        <label for="search" class="relative">
            <svg class="absolute z-10 top-1/2 pl-2 transform -translate-y-1/2 left-3 h-[25px]" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.9249 23.203L16.8093 15.0874C18.0687 13.4593 18.7499 11.4687 18.7499 9.37496C18.7499 6.86872 17.7718 4.51873 16.0031 2.74686C14.2343 0.974996 11.8781 0 9.37496 0C6.87185 0 4.5156 0.978121 2.74686 2.74686C0.974996 4.5156 0 6.86872 0 9.37496C0 11.8781 0.978121 14.2343 2.74686 16.0031C4.5156 17.7749 6.86872 18.7499 9.37496 18.7499C11.4687 18.7499 13.4562 18.0687 15.0843 16.8124L23.1999 24.9249C23.2237 24.9487 23.252 24.9676 23.2831 24.9805C23.3141 24.9934 23.3475 25 23.3811 25C23.4148 25 23.4481 24.9934 23.4792 24.9805C23.5103 24.9676 23.5386 24.9487 23.5624 24.9249L24.9249 23.5655C24.9487 23.5417 24.9676 23.5135 24.9805 23.4824C24.9934 23.4513 25 23.4179 25 23.3843C25 23.3506 24.9934 23.3173 24.9805 23.2862C24.9676 23.2551 24.9487 23.2268 24.9249 23.203ZM14.3249 14.3249C12.9999 15.6468 11.2437 16.3749 9.37496 16.3749C7.50622 16.3749 5.74998 15.6468 4.42498 14.3249C3.10311 12.9999 2.37499 11.2437 2.37499 9.37496C2.37499 7.50622 3.10311 5.74685 4.42498 4.42498C5.74998 3.10311 7.50622 2.37499 9.37496 2.37499C11.2437 2.37499 13.0031 3.09999 14.3249 4.42498C15.6468 5.74998 16.3749 7.50622 16.3749 9.37496C16.3749 11.2437 15.6468 13.0031 14.3249 14.3249Z" fill="#7A7A7A"/>
            </svg>
            <input class="w-96 h-12 pl-14 rounded-xl border-none drop-shadow block" type="search" placeholder="Cari NIM atau nama mahasiswa" />
        </label>
    </div>
    
    <div class="flex items-center gap-x-6">
        <p class="text-2xl font-bold">Hi {{$currentUser}}!</p>
        
        <div class="dropdown relative">
            <a href="" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-full h-12" src="{{ asset('images/misc_icon/avatar.png') }}" alt="avatar_icon">
            </a>
            <ul
              class="
                dropdown-menu
                min-w-max
                absolute
                hidden
                bg-white
                text-base
                z-50
                float-left
                py-2
                list-none
                text-left
                rounded-lg
                shadow-lg
                mt-1
                bg-clip-padding
                border-none
                hover:bg-dss-purple
                group
              "
              aria-labelledby="dropdownMenuButton1"
            >
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a
                    class="
                        dropdown-item
                        py-2
                        px-4
                        font-medium
                        block
                        w-full
                        whitespace-nowrap
                        bg-transparent
                        text-gray-700
                        group-hover:bg-dss-purple
                        group-hover:text-white
                    "
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"
                    >Keluar</a>
                </form>
              </li>
            </ul>
        </div>
    </div>
</div>