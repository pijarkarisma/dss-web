<div class="flex flex-row h-full min-h-screen w-screen">
    <livewire:sidebar-menu />
    
    <div class="flex-1 px-20">
        <livewire:navbar />
        
        <a href="{{route('data.mahasiswa')}}" class="text-xl font-medium text-dss-purple hover:underline">Kembali</a>

        <p class="text-3xl font-semibold mt-10">Ubah Data Mahasiswa</p>

        <form id="formTambahMhs" wire:submit.prevent="update" class="w-1/2 mt-6">
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="nim" class="text-lg text-gray-800 font-medium">NIM</label>
                <input type="number" id="nim" wire:model="nim" disabled class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                    disabled:bg-neutral-200
            ">
            </div>
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="nama-mhs" class="text-lg text-gray-800 font-medium">Nama mahasiswa</label>
                <input type="text" id="nama-mhs" wire:model="nama_mhs" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                ">
            </div>
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="tgl-lhr" class="text-lg text-gray-800 font-medium">Tanggal lahir</label>
                <input type="date" id="tgl-lhr" wire:model="tgl_lahir" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                "
                >
            </div>
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="alamat" class="text-lg text-gray-800 font-medium">Alamat</label>
                <textarea id="alamat" wire:model="alamat" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                "
                >
                </textarea>
            </div>
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="telepon" class="text-lg text-gray-800 font-medium">Telepon</label>
                <input type="number" id="telepon" wire:model="telepon" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                "
                >
            </div>
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="semester" class="text-lg text-gray-800 font-medium">Semester</label>
                <input type="number" id="semester" wire:model="semester" class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-800
                    bg-white bg-clip-padding
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                    col-span-2
                "
                >
            </div>

            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Simpan
            </button>
        </form>
    </div>
</div>