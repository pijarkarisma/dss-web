<div class="flex flex-row h-full min-h-screen w-screen">
    <livewire:sidebar-menu />

    <div class="flex-1 px-20">
        <livewire:navbar />

        <div class="flex flex-col">
            <span class="flex items-center gap-x-8">
                <svg class="stroke-dss-purple" height="48" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 2.375H18.8947V3.125H1V2.375ZM1 18.875H18.8947V19.625H1V18.875ZM1 10.625H18.8947V11.375H1V10.625Z" stroke-width="2"/>
                </svg>
                <p class="text-3xl text-dss-purple font-semibold">Analisis Alternatif</p>
            </span>

            <hr class="my-8 bg-gray-400 h-[2px]">

            <span class="mb-8">
                <p class="text-xl">Untuk masing-masing kriteria, alternatif dengan bobot tertinggi adalah yang nilainya:</p>
            </span>

            <form wire:submit.prevent="updateHasilSeleksi" class="grid grid-cols-2 gap-y-4 gap-x-10 flex mb-8">
                @foreach ($list_kriteria as $index => $kriteria)
                    @if ($index == 0)
                        <span class="mb-4 bg-violet-200 p-4 rounded-lg">
                            <p class="text-lg font-semibold text-dss-purple">Kriteria</p>
                        </span>
                        <span class="mb-4 bg-violet-200 p-4 rounded-lg">
                            <p class="text-lg font-semibold text-dss-purple">Bobot Terbesar</p>
                        </span>
                    @endif
                    
                    <span>
                        <input type="text" value="{{$kriteria['nama_kriteria']}}" disabled class="
                            form-control
                            block
                            w-full
                            px-3
                            py-2
                            text-base
                            font-normal
                            text-gray-800
                            bg-white bg-clip-padding
                            border-none
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                            col-span-2
                            disabled:bg-neutral-200
                        ">
                    </span>
                    <span>
                        <select type="number" id="{{$kriteria['id_kriteria']}}" wire:change="optionChange($event.target.id, $event.target.value)" class="
                                form-select 
                                appearance-none
                                block
                                w-full
                                px-3
                                py-2
                                text-base
                                font-normal
                                text-gray-70
                                bg-white 
                                bg-clip-padding bg-no-repeat
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
                                @foreach ($infoCopy as $key => $copy)
                                    <option value="{{$key}}">
                                        {{$copy}}
                                    </option>
                                @endforeach
                            </select>
                    </span>
                @endforeach
                {{-- Button simpan bobot alternatif --}}
                <div class="my-4 col-span-2 justify-center flex">
                    <button type="submit"
                        class="inline-block px-6 py-4 bg-[#5D35CF] text-white font-medium text-md leading-tight uppercase rounded-lg shadow-md hover:bg-[#784FED] hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out ml-1">
                        Perbarui hasil seleksi
                    </button>
                </div>
            </form>

           <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Alternatif
                        </th>
                        @foreach ($list_kriteria as $kriteria)
                            <th scope="col" class="py-3 px-6">
                                {{$kriteria['nama_kriteria']}}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilaiMahasiswa as $index => $nilai)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{$nilai['mahasiswa']}}
                             </td>
                            @foreach ($bobotAlternatif as $horizontal)
                                @if ($horizontal['id_alternatif'] == $nilai['mahasiswa'])
                                    @foreach ($list_kriteria as $kriteria)
                                        @if ($kriteria['id_kriteria'] == $horizontal['id_kriteria'])
                                            <td class="py-4 px-6">  
                                                {{$horizontal['bobot']}}
                                            </td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 font-semibold text-white">
                        <td class="py-4 px-6">
                            Jumlah
                        </td>
                        @foreach ($list_kriteria as $kriteria)
                            <?php
                                $sumBobotAlternatif = 0;
                            ?>
                            @foreach ($bobotAlternatif as $bobot)
                                @if ($kriteria['id_kriteria'] == $bobot['id_kriteria'])
                                    <?php
                                        $sumBobotAlternatif += $bobot['bobot'];
                                    ?>
                                @endif
                            @endforeach
                            <td class="py-4 px-6">
                                {{$sumBobotAlternatif}}
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>




            {{-- Tabel hasil akhir (perankingan) --}}
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Alternatif
                        </th>
                        @foreach ($list_kriteria as $kriteria)
                            <th scope="col" class="py-3 px-6">
                                {{$kriteria['nama_kriteria']}}
                            </th>
                        @endforeach
                        <th scope="col" class="py-3 px-6 bg-dss-purple text-white">
                            Ranking Bobot
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nilaiMahasiswa as $index => $nilai)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{$nilai['mahasiswa']}}
                             </td>
                            @foreach ($rankings as $horizontal)
                                @if ($horizontal['id_alternatif'] == $nilai['mahasiswa'])
                                    @foreach ($list_kriteria as $kriteria)
                                        @if ($kriteria['id_kriteria'] == $horizontal['id_kriteria'])
                                            <td class="py-4 px-6">  
                                                {{$horizontal['bobot']}}
                                            </td>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                            @foreach ($rankingBobot as $item)
                                @if ($nilai['mahasiswa'] == $item['id_alternatif'])
                                    <td class="py-4 px-6 bg-gray-600 text-white font-semibold">
                                        {{$item['bobot']}}
                                    </td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function getSelectedIndex(elementId){
            const selectBox = document.getElementById(elementId);
            return selectBox.options[selectBox.selectedIndex].value
        }
    </script>
</div>