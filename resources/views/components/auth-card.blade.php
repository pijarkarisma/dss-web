<div class="min-h-screen flex flex-col md:flex-row">
    <div class="bg-white py-[5rem] px-16 xl:basis-1/3 xs:basis-1/2">
        <div>
            {{ $authTitle }}
        </div>

        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
        <div class="mt-10">
            {{ $slot }}
        </div>
    </div>
    <div class="bg-[#FAF4FF] xl:basis-2/3 xs:basis-1/2 py-[5rem] px-16">
        <p class="w-full flex justify-center lg:text-3xl md:text-xl font-normal text-center">Sistem Pengambilan
            Keputusan<br>Seleksi Penerimaan Beasiswa<br>Unika Atma Jaya</p>
        <p class="lg:text-5xl font-semibold text-center mt-20 text-dss-purple">Selamat Datang</p>
        <div class="flex justify-center mt-20">
            <img src="/images/logo_atmajaya.png">
        </div>
    </div>
</div>