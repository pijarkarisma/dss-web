<div wire:ignore class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="tambahKriteriaModal" tabindex="-1" aria-labelledby="tambahKriteriaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between px-10 py-6 border-b border-gray-200 rounded-t-md">
        <h5 class="text-2xl font-medium leading-normal text-gray-800" id="tambahKriteriaLabel">
          Tambah Kriteria
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="formTambahKriteria" wire:submit.prevent="store">
        <div class="modal-body relative p-10">
                <div class="grid grid-cols-3 mb-10 flex items-center">
                    <label for="id_kriteria" class="text-lg text-gray-800 font-medium">ID</label>
                    <select type="text" id="id_kriteria" wire:model="id_kriteria" wire:change="onChangeOption(onChangeKriteria())" class="
                    form-select 
                    appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-400
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 
                    focus:bg-white 
                    focus:border-blue-600 
                    focus:outline-none
                    col-span-2" 
                    aria-label="Default select example"
                    >
                    @foreach ($list_kriteria as $item)
                        <option value={{$item}}>{{$item}}</option>
                    @endforeach  
                    </select>
                </div>

                <div class="grid grid-cols-3 mb-10 flex items-center">
                    <label for="nama_kriteria" class="text-lg text-gray-800 font-medium">Nama kriteria</label>
                    <input type="text" id="nama_kriteria" wire:model="nama_kriteria" class="
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
                
                {{-- <div class="grid grid-cols-3 mb-10 flex items-center">
                    <label for="ipk" class="text-lg text-gray-800 font-medium">IPK</label>
                    <input type="text" id="ipk" wire:model="ipk" class="
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
                  <input type="text" id="penghasilan_ortu" wire:model="penghasilan_ortu" class="
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
                  <input type="text" id="prestasi_akademik" wire:model="prestasi_akademik" class="
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
                  <input type="text" id="keaktifan_organisasi" wire:model="keaktifan_organisasi" class="
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
                  <input type="text" id="nilai_wawancara" wire:model="nilai_wawancara" class="
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
                  <input type="text" id="kondisi_tinggal" wire:model="kondisi_tinggal" class="
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
                  <input type="number" id="motivation_letter" wire:model="motivation_letter" class="
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
                </div> --}}
            </div>
        </form>

        <div
            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <button type="button"
            class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
            data-bs-dismiss="modal">
            Batal
            </button>
            <button type="submit" form="formTambahKriteria"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Simpan
            </button>
        </div>
    </div>
  </div>

  <script>
    function onChangeKriteria(){
        const selectBox = document.getElementById('id_kriteria');
        return selectBox.selectedIndex
    }
  </script>
</div>