<div class="flex h-full w-screen">
    <livewire:sidebar-menu />

    <div class="flex-1 px-20">
        <livewire:navbar />

        <div class="flex flex-col">
            <span class="flex items-center gap-x-8">
                <svg class="stroke-dss-purple" height="48" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 2.375H18.8947V3.125H1V2.375ZM1 18.875H18.8947V19.625H1V18.875ZM1 10.625H18.8947V11.375H1V10.625Z" stroke-width="2"/>
                </svg>
                <p class="text-3xl text-dss-purple font-semibold">Data Penilaian</p>
            </span>

            <hr class="my-8 bg-gray-400 h-[2px]">

            <span class="flex justify-end gap-x-4 mb-8">
                <button class="bg-dss-purple hover:bg-dss-purple-hover text-white text-md font-medium py-2 px-6 rounded-xl">
                    <span class="flex items-center gap-x-2">
                        <svg class="fill-white" height="30" viewBox="0 0 172 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M143.333 42.9997H114.667V35.833C114.667 30.1309 112.401 24.6622 108.369 20.6302C104.337 16.5982 98.8688 14.333 93.1667 14.333H78.8333C73.1312 14.333 67.6626 16.5982 63.6305 20.6302C59.5985 24.6622 57.3333 30.1309 57.3333 35.833V42.9997H28.6667C26.7659 42.9997 24.9431 43.7547 23.5991 45.0987C22.2551 46.4428 21.5 48.2656 21.5 50.1663C21.5 52.0671 22.2551 53.8899 23.5991 55.2339C24.9431 56.5779 26.7659 57.333 28.6667 57.333H35.8333V136.166C35.8333 141.868 38.0985 147.337 42.1305 151.369C46.1626 155.401 51.6312 157.666 57.3333 157.666H114.667C120.369 157.666 125.837 155.401 129.869 151.369C133.901 147.337 136.167 141.868 136.167 136.166V57.333H143.333C145.234 57.333 147.057 56.5779 148.401 55.2339C149.745 53.8899 150.5 52.0671 150.5 50.1663C150.5 48.2656 149.745 46.4428 148.401 45.0987C147.057 43.7547 145.234 42.9997 143.333 42.9997ZM71.6667 35.833C71.6667 33.9323 72.4217 32.1094 73.7657 30.7654C75.1097 29.4214 76.9326 28.6663 78.8333 28.6663H93.1667C95.0674 28.6663 96.8903 29.4214 98.2343 30.7654C99.5783 32.1094 100.333 33.9323 100.333 35.833V42.9997H71.6667V35.833ZM121.833 136.166C121.833 138.067 121.078 139.89 119.734 141.234C118.39 142.578 116.567 143.333 114.667 143.333H57.3333C55.4326 143.333 53.6097 142.578 52.2657 141.234C50.9217 139.89 50.1667 138.067 50.1667 136.166V57.333H121.833V136.166Z"/>
                        </svg>                            
                        <p>Hapus</p>
                    </span>
                </button>
                <button class="bg-dss-purple hover:bg-dss-purple-hover text-white text-md font-medium py-2 px-6 rounded-xl" data-bs-toggle="modal" data-bs-target="#tambahKriteriaModal">
                    <span class="flex items-center gap-x-2">
                        <svg class="fill-white" height="30" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.1816 6.53125H23.8184C24.0527 6.53125 24.1699 6.64583 24.1699 6.875V37.125C24.1699 37.3542 24.0527 37.4688 23.8184 37.4688H21.1816C20.9473 37.4688 20.8301 37.3542 20.8301 37.125V6.875C20.8301 6.64583 20.9473 6.53125 21.1816 6.53125Z"/>
                            <path d="M7.73438 20.3672H37.2656C37.5 20.3672 37.6172 20.4818 37.6172 20.7109V23.2891C37.6172 23.5182 37.5 23.6328 37.2656 23.6328H7.73438C7.5 23.6328 7.38281 23.5182 7.38281 23.2891V20.7109C7.38281 20.4818 7.5 20.3672 7.73438 20.3672Z"/>
                        </svg>                                                      
                        <p>Tambah data</p>
                    </span>
                </button>
            </span>

            <livewire:table-kriteria-penilaian/>

            {{-- Add dialog --}}
            <livewire:modal-tambah-kriteria/>
        </div>
    </div>
</div>
