<div class="flex flex-row h-full min-h-screen w-screen">
    <livewire:sidebar-menu />
    
    <div class="flex-1 px-20">
        <livewire:navbar />
        
        <a href="{{route('form.penilaian')}}" class="text-xl font-medium text-dss-purple hover:underline">Kembali</a>

        <p class="text-3xl font-semibold mt-10">Ubah Nilai Mahasiswa {{$mahasiswa->nim}} - {{$mahasiswa->nama_mhs}}</p>

        <form id="formEditKriteria" wire:submit.prevent="update" class="w-1/2 mt-6">
            <div class="grid grid-cols-3 mb-10 flex items-center">
                <label for="ipk" class="text-lg text-gray-800 font-medium">IPK</label>
                <input type="number" id="ipk" wire:model="ipk" step="0.01" min="0" max="4" class="
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
                <label for="penghasilan_ortu" class="text-lg text-gray-800 font-medium">Penghasilan orang tua</label>
                <input type="number" id="penghasilan_ortu" wire:model="penghasilan_ortu" step="0.01" min="0" class="
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
                <label for="prestasi_akademik" class="text-lg text-gray-800 font-medium">Prestasi akademik</label>
                <input type="number" id="prestasi_akademik" wire:model="prestasi_akademik" step="0.01" min="0" max="10" class="
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
                <label for="keaktifan_organisasi" class="text-lg text-gray-800 font-medium">Keaktifan organisasi</label>
                <input type="number" id="keaktifan_organisasi" wire:model="keaktifan_organisasi" step="0.01" min="0" max="10" class="
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
                <label for="nilai_wawancara" class="text-lg text-gray-800 font-medium">Nilai wawancara</label>
                <input type="number" id="nilai_wawancara" wire:model="nilai_wawancara" step="0.01" min="0" max="10" class="
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
                <label for="kondisi_tinggal" class="text-lg text-gray-800 font-medium">Kondisi tempat tinggal</label>
                <input type="number" id="kondisi_tinggal" wire:model="kondisi_tinggal" step="0.01" min="0" max="10" class="
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
                <label for="motivation_letter" class="text-lg text-gray-800 font-medium">Motivation letter</label>
                <input type="number" id="motivation_letter" wire:model="motivation_letter" step="0.01" min="0" max="100" class="
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
            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                Simpan
            </button>
        </form>
    </div>
</div>
