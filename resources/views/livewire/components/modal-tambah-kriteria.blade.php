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
                    <label for="nama_kriteria" class="text-lg text-gray-800 font-medium">Kriteria</label>
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
                <div class="grid grid-cols-3 mb-10 flex items-center">
                    <label for="bobot" class="text-lg text-gray-800 font-medium">Bobot</label>
                    <input type="text" id="bobot" wire:model="bobot" class="
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
</div>