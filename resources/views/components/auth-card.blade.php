<div class="min-h-screen grid xl:grid-cols-3 md:grid-cols-2">
    <div class="bg-white py-[5rem] px-16">
        <p class="text-5xl font-bold pb-5">Log in</p>
        <p class="text-xl font-normal text-gray-400 lg:w-3/4">Silahkan masuk menggunakan akun yang sudah terdaftar</p>
        <!-- <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"> -->
        <div class="mt-10">
            {{ $slot }}
        </div>
    </div>
    <div class="bg-[#FAF4FF] xl:col-span-2 py-[5rem] px-16">
        <p class="w-full flex justify-center lg:text-3xl md:text-xl font-normal text-center">Sistem Pengambilan
            Keputusan<br>Seleksi Penerimaan Beasiswa<br>Unika Atma Jaya</p>
        <p class="lg:text-5xl font-semibold text-center mt-20 text-dss-purple">Selamat Datang</p>
        <div class="flex justify-center mt-20">
            <img src="/images/logo_atmajaya.png">
        </div>
    </div>
</div>