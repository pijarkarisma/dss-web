<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="py-3 px-6">
                    <input class="appearance-none h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault"> 
                </th> --}}
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    ID Kriteria
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Kriteria
                </th>
                <th scope="col" class="py-3 px-6">
                    Bobot
                </th>
                {{-- <th scope="col" class="py-3 px-6">
                    Penghasilan Orang Tua    
                </th>
                <th scope="col" class="py-3 px-6">
                    Prestasi Akademik   
                </th>
                <th scope="col" class="py-3 px-6">
                    Keaktifan Organisasi
                </th>
                <th scope="col" class="py-3 px-6">
                    Nilai Wawancara
                </th>
                <th scope="col" class="py-3 px-6">
                    Kondisi Tempat Tinggal
                </th>
                <th scope="col" class="py-3 px-6">
                    Motivation Letter
                </th> --}}
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kriterias as $index => $kriteria)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    {{-- <td class="py-4 px-6">
                        <input class="h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                    </td> --}}
                    <td class="py-4 px-6">
                        {{$index + 1}}.
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->id_kriteria }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->nama_kriteria }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->bobot }}
                    </td>
                    {{-- <td class="py-4 px-6">
                        {{ $kriteria->penghasilan_ortu }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->prestasi_akademik }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->keaktifan_organisasi }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->nilai_wawancara }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->kondisi_tinggal }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $kriteria->motivation_letter }}
                    </td> --}}
                    <td class="py-4 px-6 gap-x-4">
                        <div class="flex flex-row gap-x-4">
                            <span>
                                <a href="{{ route('data.penilaian.edit', ['id'=>$kriteria->id_kriteria]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ubah</a>
                            </span>
                            {{-- <span>
                                <button wire:click="delete('{{$kriteria->id_kriteria}}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                            </span> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>