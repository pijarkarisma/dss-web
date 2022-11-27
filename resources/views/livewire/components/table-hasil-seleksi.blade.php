<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{-- <th scope="col" class="py-3 px-6">
                    <input class="appearance-none h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault"> 
                </th> --}}
                <th scope="col" class="py-3 px-6">
                    Peringkat
                </th>
                <th scope="col" class="py-3 px-6">
                    NIM
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Mahasiswa
                </th>
                <th scope="col" class="py-3 px-6">
                    Nilai Akhir
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilaiMahasiswas as $index => $nilaiMhs)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    {{-- <td class="py-4 px-6">
                        <input class="h-6 w-6 border border-gray-300 rounded bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 bg-no-repeat bg-center bg-contain cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                    </td> --}}
                    <td class="py-4 px-6">
                        {{$index + 1}}.
                    </td>
                    <td class="py-4 px-6">
                        {{ $nilaiMhs['mahasiswa'] }}
                    </td>
                    <td class="py-4 px-6">
                        @foreach ($mahasiswas as $mhs)
                            @if ($nilaiMhs['mahasiswa'] == $mhs['nim'])
                                {{ $mhs['nama_mhs'] }}
                            @endif
                        @endforeach
                    </td>
                    <td class="py-4 px-6">
                        {{ number_format($nilaiMhs['hasil_akhir'], 5) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>