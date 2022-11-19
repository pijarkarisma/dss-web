<div class="w-[350px] flex-none h-screen shadow-lg bg-white">
    <div class="px-14 pt-12 pb-8">
        <p class="text-3xl font-semibold text-gray-500">Beasiswa</p>
        <p class="text-xl text-gray-500">Unika Atma Jaya</p>
    </div>

    <div class="grid">
        <a href="{{ route('dashboard')}}" class="group flex items-center h-16 hover:bg-violet-50 @if($currentActivePage == 'dashboard') bg-violet-50 @endif">
            <svg class="h-full w-2 group-hover:fill-dss-purple group-hover:visible relative @if($currentActivePage == 'dashboard') fill-dss-purple visible @else invisible @endif">
                <rect class="w-2 h-full" />
            </svg>
            <svg class="mr-[30px] ml-12 stroke-gray-500 group-hover:stroke-dss-purple" width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.8 14.5294H9.8V15.5294V23H5.05V12.7059V11.7059H4.05H2.52158L13.5 1.37325L24.4784 11.7059H22.95H21.95V12.7059V23H17.2V15.5294V14.5294H16.2H10.8Z" stroke-width="2"/>
            </svg>
            <p class="text-lg font-medium text-gray-500 group-hover:font-semibold group-hover:text-dss-purple">Beranda</p>
        </a>
        <a href="{{ route('kriteria.penilaian') }}" class="group flex items-center h-16 hover:bg-violet-50 @if($currentActivePage == 'kriteria.penilaian') bg-violet-50 @endif">
            <svg class="h-full w-2 group-hover:fill-dss-purple group-hover:visible relative @if($currentActivePage == 'kriteria.penilaian') fill-dss-purple visible @else invisible @endif">
                <rect class="w-2 h-full" />
            </svg>
            <svg class="mr-[30px] ml-12 stroke-gray-500 group-hover:stroke-dss-purple" width="27" height="24" viewBox="0 0 27 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 2.375H18.8947V3.125H1V2.375ZM1 18.875H18.8947V19.625H1V18.875ZM1 10.625H18.8947V11.375H1V10.625Z" stroke-width="2"/>
            </svg>                    
            <p class="text-lg font-medium text-gray-500 group-hover:font-semibold group-hover:text-dss-purple">Kriteria Penilaian</p>
        </a>
        <a href="{{ route('data.mahasiswa') }}" class="group flex items-center h-16 hover:bg-violet-50 @if($currentActivePage == 'data.mahasiswa') bg-violet-50 @endif">
            <svg class="h-full w-2 group-hover:fill-dss-purple group-hover:visible relative @if($currentActivePage == 'data.mahasiswa') fill-dss-purple visible @else invisible @endif">
                <rect class="w-2 h-full" />
            </svg>
            <svg class="mr-[30px] ml-12 stroke-gray-500 group-hover:stroke-dss-purple" width="27" height="18" viewBox="0 0 29 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.7141 3.85714C22.7141 5.42008 21.4279 6.71429 19.7727 6.71429C18.1132 6.71429 16.8182 5.41578 16.8182 3.85714C16.8182 2.29851 18.1132 1 19.7727 1C21.4279 1 22.7141 2.2942 22.7141 3.85714ZM12.1686 3.85714C12.1686 5.42008 10.8824 6.71429 9.22727 6.71429C7.56772 6.71429 6.27273 5.41578 6.27273 3.85714C6.27273 2.29851 7.56772 1 9.22727 1C10.8824 1 12.1686 2.2942 12.1686 3.85714ZM1 14.7857C1 14.4139 1.18298 14.0081 1.67862 13.5622C2.18001 13.1112 2.92353 12.6959 3.82548 12.3439C5.62995 11.6396 7.81324 11.2857 9.22727 11.2857C10.6413 11.2857 12.8246 11.6396 14.6291 12.3439C15.531 12.6959 16.2745 13.1112 16.7759 13.5622C17.2716 14.0081 17.4545 14.4139 17.4545 14.7857V17H1V14.7857ZM22.0909 14.7857C22.0909 13.4438 21.6526 12.3047 20.9591 11.352C22.2544 11.4845 23.821 11.8156 25.1745 12.3439C26.0765 12.6959 26.82 13.1112 27.3214 13.5622C27.817 14.0081 28 14.4139 28 14.7857V17H22.0909V14.7857Z" stroke-width="2"/>
            </svg>
            <p class="text-lg font-medium text-gray-500 group-hover:font-semibold group-hover:text-dss-purple">Data Mahasiswa</p>
        </a>
        <a href="{{ route('data.penilaian') }}" class="group flex items-center h-16 hover:bg-violet-50 @if($currentActivePage == 'data.penilaian') bg-violet-50 @endif">
            <svg class="h-full w-2 group-hover:fill-dss-purple group-hover:visible relative @if($currentActivePage == 'data.penilaian') fill-dss-purple visible @else invisible @endif">
                <rect class="w-2 h-full" />
            </svg>
            <svg class="mr-[30px] ml-12 fill-gray-500 group-hover:fill-dss-purple" width="27" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.3334 4.6665H4.66671C3.37171 4.6665 2.34504 5.70484 2.34504 6.99984L2.33337 20.9998C2.33337 22.2948 3.37171 23.3332 4.66671 23.3332H10.5V20.9998H4.66671V13.9998H25.6667V6.99984C25.6667 5.70484 24.6284 4.6665 23.3334 4.6665ZM23.3334 9.33317H4.66671V6.99984H23.3334V9.33317ZM17.4184 22.3648L14.1167 19.0632L12.4717 20.7082L17.4184 25.6665L25.6667 17.4182L24.0217 15.7732L17.4184 22.3648Z"/>
            </svg>
            <p class="text-lg font-medium text-gray-500 group-hover:font-semibold group-hover:text-dss-purple">Data Penilaian</p>
        </a>
        <a href="{{ route('hasil.seleksi') }}" class="group flex items-center h-16 hover:bg-violet-50 @if($currentActivePage == 'hasil.seleksi') bg-violet-50 @endif">
            <svg class="h-full w-2 group-hover:fill-dss-purple group-hover:visible relative @if($currentActivePage == 'hasil.seleksi') fill-dss-purple visible @else invisible @endif">
                <rect class="w-2 h-full" />
            </svg>
            <svg class="mr-[30px] ml-12 stroke-gray-500 group-hover:stroke-dss-purple" width="27" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.8184 3.03672L15.0556 3.7H15.76H21.3333C22.236 3.7 23 4.45554 23 5.4V24.3C23 25.2445 22.236 26 21.3333 26H2.66667C1.76396 26 1 25.2445 1 24.3V5.4C1 4.45554 1.76396 3.7 2.66667 3.7H8.24H8.94442L9.18161 3.03672C9.61004 1.83862 10.72 1 12 1C13.28 1 14.39 1.83862 14.8184 3.03672ZM14.6667 22.6H15.6667V21.6V18.9V17.9H14.6667H5.33333H4.33333V18.9V21.6V22.6H5.33333H14.6667ZM18.6667 17.2H19.6667V16.2V13.5V12.5H18.6667H5.33333H4.33333V13.5V16.2V17.2H5.33333H18.6667ZM18.6667 11.8H19.6667V10.8V8.1V7.1H18.6667H5.33333H4.33333V8.1V10.8V11.8H5.33333H18.6667ZM14.3333 4.05C14.3333 2.76696 13.2973 1.7 12 1.7C10.7027 1.7 9.66667 2.76696 9.66667 4.05C9.66667 5.33304 10.7027 6.4 12 6.4C13.2973 6.4 14.3333 5.33304 14.3333 4.05Z" stroke-width="2"/>
            </svg>
            <p class="text-lg font-medium text-gray-500 group-hover:font-semibold group-hover:text-dss-purple">Hasil Seleksi</p>
        </a>
    </div>
</div>