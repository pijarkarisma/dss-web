<div class="flex h-full w-screen">
    <livewire:sidebar-menu />
    
    <div class="flex-1 px-20">
        <livewire:navbar />

        <div class="grid grid-cols-2 w-fit grid-rows-2 gap-24">
            <a href="{{ route('data.mahasiswa') }}" class="container flex items-center w-96 h-44 bg-gradient-to-r from-purple-500 to-blue-700 rounded-2xl drop-shadow-md hover:from-blue-700 hover:to-purple-500">
                <div class="grid grid-rows-2 px-12 gap-y-6">
                    <span>
                        <svg class="stroke-white" height="48" viewBox="0 0 29 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.7141 3.85714C22.7141 5.42008 21.4279 6.71429 19.7727 6.71429C18.1132 6.71429 16.8182 5.41578 16.8182 3.85714C16.8182 2.29851 18.1132 1 19.7727 1C21.4279 1 22.7141 2.2942 22.7141 3.85714ZM12.1686 3.85714C12.1686 5.42008 10.8824 6.71429 9.22727 6.71429C7.56772 6.71429 6.27273 5.41578 6.27273 3.85714C6.27273 2.29851 7.56772 1 9.22727 1C10.8824 1 12.1686 2.2942 12.1686 3.85714ZM1 14.7857C1 14.4139 1.18298 14.0081 1.67862 13.5622C2.18001 13.1112 2.92353 12.6959 3.82548 12.3439C5.62995 11.6396 7.81324 11.2857 9.22727 11.2857C10.6413 11.2857 12.8246 11.6396 14.6291 12.3439C15.531 12.6959 16.2745 13.1112 16.7759 13.5622C17.2716 14.0081 17.4545 14.4139 17.4545 14.7857V17H1V14.7857ZM22.0909 14.7857C22.0909 13.4438 21.6526 12.3047 20.9591 11.352C22.2544 11.4845 23.821 11.8156 25.1745 12.3439C26.0765 12.6959 26.82 13.1112 27.3214 13.5622C27.817 14.0081 28 14.4139 28 14.7857V17H22.0909V14.7857Z" stroke-width="2"/>
                        </svg>
                    </span>
                    <span>
                        <p class="text-white text-3xl font-medium align-baseline">Data mahasiswa</p>
                    </span>
                </div>
            </a>

            <a href="{{ route('data.penilaian') }}" class="container flex items-center w-96 h-44 bg-gradient-to-r from-purple-500 to-blue-700 rounded-2xl drop-shadow-md hover:from-blue-700 hover:to-purple-500">
                <div class="grid grid-rows-2 px-12 gap-y-6">
                    <span>
                        <svg class="stroke-white fill-white" height="48" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.3334 4.6665H4.66671C3.37171 4.6665 2.34504 5.70484 2.34504 6.99984L2.33337 20.9998C2.33337 22.2948 3.37171 23.3332 4.66671 23.3332H10.5V20.9998H4.66671V13.9998H25.6667V6.99984C25.6667 5.70484 24.6284 4.6665 23.3334 4.6665ZM23.3334 9.33317H4.66671V6.99984H23.3334V9.33317ZM17.4184 22.3648L14.1167 19.0632L12.4717 20.7082L17.4184 25.6665L25.6667 17.4182L24.0217 15.7732L17.4184 22.3648Z" />
                        </svg>                            
                    </span>
                    <span>
                        <p class="text-white text-3xl font-medium align-baseline">Data penilaian</p>
                    </span>
                </div>
            </a>

            <a href="{{ route('hasil.seleksi') }}" class="container flex items-center w-96 h-44 bg-gradient-to-r from-purple-500 to-blue-700 rounded-2xl drop-shadow-md hover:from-blue-700 hover:to-purple-500">
                <div class="grid grid-rows-2 px-12 gap-y-6">
                    <span>
                        <svg class="stroke-white" height="48" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.8184 3.03672L15.0556 3.7H15.76H21.3333C22.236 3.7 23 4.45554 23 5.4V24.3C23 25.2445 22.236 26 21.3333 26H2.66667C1.76396 26 1 25.2445 1 24.3V5.4C1 4.45554 1.76396 3.7 2.66667 3.7H8.24H8.94442L9.18161 3.03672C9.61004 1.83862 10.72 1 12 1C13.28 1 14.39 1.83862 14.8184 3.03672ZM14.6667 22.6H15.6667V21.6V18.9V17.9H14.6667H5.33333H4.33333V18.9V21.6V22.6H5.33333H14.6667ZM18.6667 17.2H19.6667V16.2V13.5V12.5H18.6667H5.33333H4.33333V13.5V16.2V17.2H5.33333H18.6667ZM18.6667 11.8H19.6667V10.8V8.1V7.1H18.6667H5.33333H4.33333V8.1V10.8V11.8H5.33333H18.6667ZM14.3333 4.05C14.3333 2.76696 13.2973 1.7 12 1.7C10.7027 1.7 9.66667 2.76696 9.66667 4.05C9.66667 5.33304 10.7027 6.4 12 6.4C13.2973 6.4 14.3333 5.33304 14.3333 4.05Z" stroke-width="2"/>
                        </svg>
                    </span>
                    <span>
                        <p class="text-white text-3xl font-medium align-baseline">Hasil seleksi</p>
                    </span>
                </div>
            </a>

            <a href="" class="container flex items-center w-96 h-44 bg-gradient-to-r from-purple-500 to-blue-700 rounded-2xl drop-shadow-md hover:from-blue-700 hover:to-purple-500">
                <div class="grid grid-rows-2 px-12 gap-y-6">
                    <span>
                        <svg class="stroke-white" height="48" viewBox="0 0 58 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M51.2031 26.5H48.0312C47.782 26.5 47.5781 26.6863 47.5781 26.9141V43.4766H10.4219V9.52344H28.5469C28.7961 9.52344 29 9.33711 29 9.10938V6.21094C29 5.9832 28.7961 5.79688 28.5469 5.79688H8.15625C7.15371 5.79688 6.34375 6.53701 6.34375 7.45312V45.5469C6.34375 46.463 7.15371 47.2031 8.15625 47.2031H49.8438C50.8463 47.2031 51.6562 46.463 51.6562 45.5469V26.9141C51.6562 26.6863 51.4523 26.5 51.2031 26.5Z" fill="#FAF4FF"/>
                            <path d="M20.1584 27.6853L20.0508 33.8393C20.0451 34.2999 20.4529 34.6777 20.957 34.6777H20.9797L27.6633 34.5276C27.7766 34.5225 27.8898 34.4811 27.9691 34.4086L51.526 12.9291C51.7016 12.7687 51.7016 12.5047 51.526 12.3442L44.4855 5.91592C44.3949 5.83311 44.2816 5.79688 44.1627 5.79688C44.0437 5.79688 43.9305 5.83828 43.8398 5.91592L20.2887 27.3954C20.2069 27.4736 20.1603 27.5771 20.1584 27.6853ZM23.7551 28.9067L44.1627 10.2998L46.7229 12.6341L26.3039 31.2514L23.7154 31.3083L23.7551 28.9067Z" fill="#FAF4FF"/>
                        </svg>                            
                    </span>
                    <span>
                        <p class="text-white text-3xl font-medium align-baseline">Form penilaian</p>
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>
