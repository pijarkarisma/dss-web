<div class="py-12 flex w-full justify-between items-center">
    {{-- <div>
        <label for="search" class="relative">
            <svg class="absolute z-10 top-1/2 pl-2 transform -translate-y-1/2 left-3 h-[25px]" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.9249 23.203L16.8093 15.0874C18.0687 13.4593 18.7499 11.4687 18.7499 9.37496C18.7499 6.86872 17.7718 4.51873 16.0031 2.74686C14.2343 0.974996 11.8781 0 9.37496 0C6.87185 0 4.5156 0.978121 2.74686 2.74686C0.974996 4.5156 0 6.86872 0 9.37496C0 11.8781 0.978121 14.2343 2.74686 16.0031C4.5156 17.7749 6.86872 18.7499 9.37496 18.7499C11.4687 18.7499 13.4562 18.0687 15.0843 16.8124L23.1999 24.9249C23.2237 24.9487 23.252 24.9676 23.2831 24.9805C23.3141 24.9934 23.3475 25 23.3811 25C23.4148 25 23.4481 24.9934 23.4792 24.9805C23.5103 24.9676 23.5386 24.9487 23.5624 24.9249L24.9249 23.5655C24.9487 23.5417 24.9676 23.5135 24.9805 23.4824C24.9934 23.4513 25 23.4179 25 23.3843C25 23.3506 24.9934 23.3173 24.9805 23.2862C24.9676 23.2551 24.9487 23.2268 24.9249 23.203ZM14.3249 14.3249C12.9999 15.6468 11.2437 16.3749 9.37496 16.3749C7.50622 16.3749 5.74998 15.6468 4.42498 14.3249C3.10311 12.9999 2.37499 11.2437 2.37499 9.37496C2.37499 7.50622 3.10311 5.74685 4.42498 4.42498C5.74998 3.10311 7.50622 2.37499 9.37496 2.37499C11.2437 2.37499 13.0031 3.09999 14.3249 4.42498C15.6468 5.74998 16.3749 7.50622 16.3749 9.37496C16.3749 11.2437 15.6468 13.0031 14.3249 14.3249Z" fill="#7A7A7A"/>
            </svg>
            <input class="w-96 h-12 pl-14 rounded-xl border-none drop-shadow block" type="search" placeholder="Cari NIM atau nama mahasiswa" />
        </label>
    </div> --}}

    <div id="systemStatus" class="flex w-max justify-start items-center gap-x-8 bg-purple-100 px-4 py-2 rounded-xl drop-shadow-md">
        <p class="text-xl font-semibold text-dss-purple">Status sistem</p>
        @foreach ($systemStatus as $item)
            <div class="flex flex-row items-center">
                <span class="mr-2">
                    @if ($item['state'])
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.6 16.6L17.65 9.55L16.25 8.15L10.6 13.8L7.75 10.95L6.35 12.35L10.6 16.6ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6873 5.825 19.975 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26267 14.6833 2 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31267 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.31233 8.1 2.787C9.31667 2.26233 10.6167 2 12 2C13.3833 2 14.6833 2.26233 15.9 2.787C17.1167 3.31233 18.175 4.025 19.075 4.925C19.975 5.825 20.6873 6.88333 21.212 8.1C21.7373 9.31667 22 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6873 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6873 15.9 21.212C14.6833 21.7373 13.3833 22 12 22Z" fill="#0FA958"/>
                        </svg>
                    @else
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.7 16.3C7.88333 16.4833 8.11667 16.575 8.4 16.575C8.68333 16.575 8.91667 16.4833 9.1 16.3L12 13.4L14.925 16.325C15.1083 16.5083 15.3377 16.5957 15.613 16.587C15.8877 16.579 16.1167 16.4833 16.3 16.3C16.4833 16.1167 16.575 15.8833 16.575 15.6C16.575 15.3167 16.4833 15.0833 16.3 14.9L13.4 12L16.325 9.075C16.5083 8.89167 16.5957 8.66233 16.587 8.387C16.579 8.11233 16.4833 7.88333 16.3 7.7C16.1167 7.51667 15.8833 7.425 15.6 7.425C15.3167 7.425 15.0833 7.51667 14.9 7.7L12 10.6L9.075 7.675C8.89167 7.49167 8.66267 7.404 8.388 7.412C8.11267 7.42067 7.88333 7.51667 7.7 7.7C7.51667 7.88333 7.425 8.11667 7.425 8.4C7.425 8.68333 7.51667 8.91667 7.7 9.1L10.6 12L7.675 14.925C7.49167 15.1083 7.40433 15.3373 7.413 15.612C7.421 15.8873 7.51667 16.1167 7.7 16.3ZM12 22C10.6167 22 9.31667 21.7373 8.1 21.212C6.88333 20.6873 5.825 19.975 4.925 19.075C4.025 18.175 3.31267 17.1167 2.788 15.9C2.26267 14.6833 2 13.3833 2 12C2 10.6167 2.26267 9.31667 2.788 8.1C3.31267 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.31233 8.1 2.787C9.31667 2.26233 10.6167 2 12 2C13.3833 2 14.6833 2.26233 15.9 2.787C17.1167 3.31233 18.175 4.025 19.075 4.925C19.975 5.825 20.6873 6.88333 21.212 8.1C21.7373 9.31667 22 10.6167 22 12C22 13.3833 21.7373 14.6833 21.212 15.9C20.6873 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6873 15.9 21.212C14.6833 21.7373 13.3833 22 12 22Z" fill="#F24E1E"/>
                        </svg>
                    @endif
                </span>
                <span>
                    <p>{{$item['nama']}}</p>
                    <span class="font-semibold">
                        @if ($item['state'])
                            <p class="text-green-600">Terbaru</p>
                        @else
                            <p class="text-red-600">Belum diperbarui</p>
                        @endif
                    </span>
                </span>
            </div>
        @endforeach
        {{-- <span>
            <p>Analisis kriteria</p>
            <p class="font-semibold">Belum diperbarui</p>
        </span>
        <span>
            <p>Analisis alternatif</p>
            <p class="font-semibold">Belum diperbarui</p>
        </span>
        <span>
            <p>Hasil seleksi</p>
            <p class="font-semibold">Belum diperbarui</p>
        </span> --}}
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