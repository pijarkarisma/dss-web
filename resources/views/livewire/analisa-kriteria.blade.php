<div class="flex flex-row h-full min-h-screen min-w-screen">
    <livewire:sidebar-menu />

    <div class="flex-1 px-20">
        <livewire:navbar />

        <div class="flex flex-col">
            <span class="flex items-center gap-x-8">
                <svg class="stroke-dss-purple" height="48" viewBox="0 0 27 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 2.375H18.8947V3.125H1V2.375ZM1 18.875H18.8947V19.625H1V18.875ZM1 10.625H18.8947V11.375H1V10.625Z" stroke-width="2"/>
                </svg>
                <p class="text-3xl text-dss-purple font-semibold">Analisis Kriteria</p>
            </span>

            <hr class="my-8 bg-gray-400 h-[2px]">

            <form wire:submit.prevent="update" class="grid grid-cols-3 gap-y-4 gap-x-10 flex mb-8">
                @foreach ($kriteria_kiri as $index => $kiri)
                        @if ($index == 0)
                            <span class="mb-4">
                                <p class="text-lg font-medium text-dss-purple">Kriteria</p>
                            </span>
                            <span>
                                <p class="text-lg font-medium text-dss-purple">Penilaian</p>
                            </span>
                            <span>
                                <p class="text-lg font-medium text-dss-purple">Kriteria Pembanding</p>
                            </span>
                        @endif

                        @foreach ($kriteria_kanan as $kanan)
                        @if ($kiri != $kanan && !in_array($kanan, $exclude))
                        <span>
                            <input type="text" value="{{$kiri}}" disabled class="
                                form-control
                                block
                                w-full
                                px-3
                                py-1.5
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
                            <select type="number" id="{{$kiri}}-{{$kanan}}" wire:change="nilaiChange($event.target.id, $event.target.value)" class="
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
                                @for ($i = 1; $i < 10; $i++)
                                    <option value={{$i}}
                                        @foreach ($nilaiStorage as $item)
                                            @if ($i == $item['nilai'] && $kiri."-".$kanan == $item['id'])
                                                selected
                                            @endif
                                        @endforeach
                                    >
                                        {{$i}}
                                    </option>
                                @endfor 
                            </select>
                            {{-- <input type="number"
                                @foreach($nilaiStorage as $index => $nilai) 
                                    @if ($kiri."-".$kanan == $nilai['id'])
                                        value="{{$nilai['value']}}"
                                    @endif
                                @endforeach
                            id="{{$kiri}}-{{$kanan}}"  
                            wire:change="nilaiChange($event.target.id, $event.target.value)"
                            class="
                                form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-800
                                bg-white bg-clip-padding
                                border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-800 focus:bg-white focus:border-blue-600 focus:outline-none
                                col-span-2
                                disabled:bg-neutral-200
                            "> --}}
                        </span>
                        <span>
                            <input type="text" value="{{$kanan}}" disabled class="
                                form-control
                                block
                                w-full
                                px-3
                                py-1.5
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
                    @endif
                        @endforeach
                    <?php
                        array_push($exclude, $kiri)
                    ?>
                @endforeach
                <div class="my-4 col-span-3 justify-center flex">
                    <button type="submit"
                        class="inline-block px-6 py-4 bg-[#5D35CF] text-white font-medium text-md leading-tight uppercase rounded-lg shadow-md hover:bg-[#784FED] hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out ml-1">
                        Perbarui bobot kriteria
                    </button>
                </div>
            </form>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Antar Kriteria
                    </th>
                    @foreach ($kriteria_kiri as $item)
                        <th scope="col" class="py-3 px-6">
                            {{$item}}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($kriteria_kiri as $index => $kiri)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{$kiri}}
                        </td>
                        @foreach ($kriteria_kanan as $kanan)
                            <td class="py-4 px-6">  
                                @foreach ($nilaiStorage as $nilai)
                                    @if ($kiri."-".$kanan == $nilai['id'])
                                        {{$nilai['nilai'] + 0}}
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 font-semibold text-white">
                    <td class="py-4 px-6">
                        Jumlah
                    </td>
                    @foreach ($kriteria_kanan as $kanan)
                        <?php
                            $total = 0
                        ?>

                        @foreach ($kriteria_kiri as $kiri)
                        @foreach ($nilaiStorage as $nilai)
                            @if ($kiri."-".$kanan == $nilai['id'])
                                <?php $total += $nilai['nilai'] ?>
                            @endif
                        @endforeach
                        @endforeach
                        <?php array_push($totalAntarKriteria, $total) ?>
                        
                        <td class="py-4 px-6">  
                            {{$total}}
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mb-10">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Perbandingan
                    </th>
                    @foreach ($kriteria_kiri as $item)
                        <th scope="col" class="py-3 px-6">
                            {{$item}}
                        </th>
                    @endforeach
                    <th scope="col" class="py-3 px-6">
                        Bobot
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kriteria_kiri as $index => $kiri)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{$kiri}}
                        </td>
                        <?php $totalHorizontal = 0 ?>
                        @foreach ($kriteria_kanan as $index => $kanan)
                            <td class="py-4 px-6">  
                                @foreach ($nilaiStorage as $nilai)
                                    @if ($kiri."-".$kanan == $nilai['id'])
                                        {{$nilai['nilai'] / $totalAntarKriteria[$index]}}
                                        <?php $totalHorizontal += $nilai['nilai'] / $totalAntarKriteria[$index] ?>
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                        <td class="py-4 px-6 font-semibold text-white">
                            {{$totalHorizontal / count($kriteria_kanan)}}
                        </td>
                        <?php 
                            $bobotObject = [];
                            $bobotObject['id'] = $kiri;
                            $bobotObject['bobot'] = $totalHorizontal / count($kriteria_kanan);
                            array_push($bobotPerbandingan, $bobotObject); 
                        ?>
                    </tr>
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 font-semibold text-white">
                    <td class="py-4 px-6">
                        Jumlah
                    </td>
                    @foreach ($kriteria_kanan as $kanan)
                        <?php
                            $total = 0
                        ?>

                        @foreach ($kriteria_kiri as $index => $kiri)
                        @foreach ($nilaiStorage as $nilai)
                            @if ($kiri."-".$kanan == $nilai['id'])
                                <?php $total += $nilai['nilai'] / $totalAntarKriteria[$index] ?>
                            @endif
                        @endforeach
                        @endforeach
                        
                        <td class="py-4 px-6">  
                            {{$total}}
                        </td>
                    @endforeach
                    <td class="py-4 px-6">
                        {{array_sum(array_column($bobotPerbandingan, 'bobot'))}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function onChangeKriteria(elementId){
            const selectBox = document.getElementById(elementId);
            return selectBox.options[selectBox.selectedIndex].value
        }
    </script>
</div>
