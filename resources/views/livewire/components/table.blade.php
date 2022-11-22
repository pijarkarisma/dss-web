<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="py-3 px-6">
                    <input class="appearance-none h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault"> 
                </th> --}}
                <th scope="col" class="py-3 px-6">
                    NIM
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Lengkap
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Lahir
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    No. Telepon
                </th>
                <th scope="col" class="py-3 px-6">
                    Semester
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $index => $mahasiswa)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    {{-- <td class="py-4 px-6">
                        <input class="h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                    </td> --}}
                    <td class="py-4 px-6">
                        {{ $mahasiswa->nim }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $mahasiswa->nama_mhs }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $mahasiswa->tgl_lahir }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $mahasiswa->alamat }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $mahasiswa->telepon }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $mahasiswa->semester }}
                    </td>
                    <td class="py-4 px-6 gap-x-4">
                        <div class="flex flex-row gap-x-4">
                            <span>
                                <a href="{{ route('data.mahasiswa.edit', ['nim'=>$mahasiswa->nim]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-bs-toggle="modal" data-bs-target="#editMahasiswaModal-{{$mahasiswa->nim}}">Ubah</a>

                                {{-- Add dialog --}}
                                <livewire:modal-edit-mahasiswa :nim="$mahasiswa->nim"/>
                            </span>
                            <span>
                                <button wire:click="delete({{$mahasiswa->nim}})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                            </span>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>