@extends('layouts.app')

@section('title', 'Tari Lahbako')

@section('content')

    <div class="pt-40 pb-14 px-4">
        <div class="content mx-auto">
            <div
                class="relative tari-lahbako rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex flex-col min-[540px]:flex-row min-[540px]:justify-between gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">PESONA TARI LAHBAKO,
                        </h1>
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA
                            NUSANTARA</h1>
                    </div>
                </div>

                <div class="z-20">
                    <iframe
                        class="rounded-xl md:rounded-2xl lg:rounded-3xl w-full h-[200px] min-[540px]:w-[230px] min-[540px]:h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]"
                        src="https://www.youtube.com/embed/3NcKE0LEEA0?si=nVFDcQfXpFmpaOUC" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-28 px-4">
        <div class="content mx-auto">
            <div class="">
                <p class="text-lg sm:text-xl text-justify">Tari Lahbako merupakan tarian yang terinspirasi dari keseharian
                    petani <span class="font-semibold">tembakau</span> di <span class="font-semibold">Jember</span>, yang
                    menggambarkan <span class="font-semibold">proses penanaman tembakau</span>, pemetikan, bahkan sampai
                    proses pengemasan tembakau itu sendiri. Dimainkan oleh 4-8 orang, Tari Lahbako dibuat untuk <span
                        class="font-semibold">mengapresiasi</span> peran para <span class="font-semibold">perempuan</span>
                    di Jember yang mengelola tembakau, dikarenakan kebanyakan pengelola tembakau pada saat itu adalah
                    perempuan.
                </p>
            </div>

            <div class="mt-14">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="text-xl font-bold underline">Sejarah singkat</span>
                    Tari Lahbako terbentuk dari keinginan Bupati Jember pada tahun <span class="font-semibold">1985</span>
                    yaitu Bapak <span class="font-semibold">Suryadi Setiawan</span>. Pada saat itu, Bapak Suryadi ingin
                    memiliki tarian yang dapat dijadikan ikon <span class="font-semibold">identitas budaya Jember</span>.
                    Beliau terinsipirasi dari <span class="font-semibold">keseharian masyarakat</span> Jember yang sebagian
                    besar merupakan petani tembakau. Dari hal tersebut, tercetus lah sebuah tarian bernama Tari Lahbako yang
                    merupakan gabungan dari 2 kata, yakni “<span class="font-bold">Lah</span>” yang artinya “olah/mengolah”
                    dan “<span class="font-bold">Bako</span>” yang artinya “tembakau”. Sehingga dapat diartikan Tari Lahbako
                    adalah tarian yang <span class="font-semibold">menceritakan pengolahan tembakau</span>.
                </p>
                <p class="text-lg sm:text-xl mt-10 text-justify">
                    Dahulu, Tari Lahbako <span class="font-semibold">biasanya dipentaskan di ladang</span> menjelang musim
                    panen tembakau. Namun, saat ini para petani tidak lagi menggelar tarian ini pada waktu panen, sehingga
                    Tarian Lahbako telah menjadi <span class="font-semibold">warisan tradisi</span> dari nenek moyang kita.
                    Karena statusnya sebagai warisan budaya kota Jember, penting bagi kita untuk melestarikannya agar
                    generasi muda tetap mengenal tarian ini. Oleh karena itu, Tarian Lahbako <span
                        class="font-semibold">sering dipentaskan dalam festival budaya</span> di Jember, seperti saat
                    penyambutan tamu besar atau acara kebudayaan lainnya.
                </p>
            </div>
        </div>
    </div>

    <div class="pb-32 pt-14 px-4">
        <div class="content mx-auto">
            <div class="flex flex-col">
                <h2 class=" font-extrabold text-4xl mb-2"><span
                        class="text-green-700">Kostum</span> Penari</h2>
                <div class="relative mb-28 pr-10 rounded-e-[100px] bg-slate-300 pl-10">

                    
                    <div class="flex flex-col md:flex-row items-center gap-5 py-5">
                        <img class="" src="{{ asset('assets/img/kostum-lahbako.png') }}"
                        alt="">

                        <p class="text-base sm:text-xl">Busana yang dipakai dalam pertunjukan Tari Lahbako menggambarkan <span
                                class="font-semibold">para perani tembakau</span>. Di bagian kepala, penari memakai <span
                                class="font-semibold">sanggul cemol</span>, yaitu jenis sanggul yang memanjang ke atas. Selain
                            itu, ada berbagai aksesoris seperti <span class="font-semibold">bendera kecil</span> dengan warna
                            berbeda yang masing-masing <span class="font-semibold">melambangkan tugas petani</span>. Ada juga
                            anting-anting dan aksesoris lain berbentuk daun tembakau. Untuk pakaiannya, biasanya penari <span
                                class="font-semibold">mengenakan kebaya</span>, dan bagian bawahnya <span
                                class="font-semibold">memakai kain panjang</span> atau sarong <span class="font-semibold">serta
                                celemek</span> atau tatakan yang biasa digunakan para petani saat bekerja.</p>
                    </div>
                </div>
                
                <h2 class="text-end mb-2 font-extrabold text-4xl"><span
                        class="text-green-700">Alat</span> & <span class="text-green-700">Musik</span> Pengiring</h2>
                <div class="relative mb-28 pr-10 rounded-s-[100px] bg-slate-300 pl-10">
                    
                    <div class="flex flex-col-reverse md:flex-row items-center gap-5 py-5">
                        <p class="text-base sm:text-xl">Gerakan dalam Tari Lahbako mengacu pada gerakan yang <span
                            class="font-semibold">lembut tapi lugas</span>, yang selaras dengan musik pengiringnya, yakni
                            <span class="font-semibold">musik patrol</span>. Musik patrol merupakan musik asal Jember yang
                            terdapat alat musik seperti <span class="font-semibold">kentongan, suling, dan gendang</span>.
                            Biasanya musik ini dimainkan oleh para pria berjumlah 7 orang.</p>
                            
                            <img class="" src="{{ asset('assets/img/music-lahbako.png') }}"
                                alt="">
                    </div>

                </div>

                <h2 class="font-extrabold text-4xl mb-2"><span
                    class="text-green-700">Karakteristik</span> Tari</h2>
                <div class="relative pr-10 rounded-e-[100px] bg-slate-300 pl-10">
                    
                        
                        <div class="flex flex-col md:flex-row gap-5 items-center py-5">
                        <img class="w-[250px]" src="{{ asset('assets/img/karakter-lahbako.png') }}"
                            alt="">

                        <p class="text-base sm:text-xl">Busana yang dipakai dalam pertunjukan Tari Lahbako menggambarkan <span
                                class="font-semibold">para perani tembakau</span>. Di bagian kepala, penari memakai <span
                                class="font-semibold">sanggul cemol</span>, yaitu jenis sanggul yang memanjang ke atas. Selain
                            itu, ada berbagai aksesoris seperti <span class="font-semibold">bendera kecil</span> dengan warna
                            berbeda yang masing-masing <span class="font-semibold">melambangkan tugas petani</span>. Ada juga
                            anting-anting dan aksesoris lain berbentuk daun tembakau. Untuk pakaiannya, biasanya penari <span
                                class="font-semibold">mengenakan kebaya</span>, dan bagian bawahnya <span
                                class="font-semibold">memakai kain panjang</span> atau sarong <span class="font-semibold">serta
                                celemek</span> atau tatakan yang biasa digunakan para petani saat bekerja.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-14 pb-14 bg-[#FCCD2A] px-4">
        <div class="content mx-auto">


            <ol class="relative ml-4 border-s border-gray-200">
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center bg-gray-400 w-8 h-8 rounded-full -start-4 ring-4 ring-white">
                    </span>
                    <h3 class="font-extrabold text-4xl leading-tight"><span class="text-white ml-2">Fungsi</span> Tari</h3>
                    <p class="text-lg ml-2">Tujuan awal diciptakannya tari tersebut, misalnya untuk upacara adat, hiburan, atau penyampaian pesan.
                        Tari Lahbako adalah sebagai bentuk apresiasi dan penghormatan kepada para petani tembakau di Jember. Tarian ini diciptakan untuk menggambarkan secara indah dan simbolik proses pengolahan tembakau, mulai dari penanaman hingga pengemasan. 
                        </p>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center bg-gray-400 w-8 h-8 rounded-full -start-4 ring-4 ring-white">
                    </span>
                    <h3 class="font-extrabold text-4xl leading-tight ml-2">Cara <span class="text-white">Melestarikan</span></h3>
                    
                    <div class="grid md:grid-cols-3 gap-5 mt-4 ml-2">
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Pengembangan Kurikulum Sekolah</h4>
                            <p>Integrasikan Tari Lahbako ke dalam kurikulum seni budaya di sekolah-sekolah di Jember. Ajak siswa untuk mempelajari sejarah, gerakan, dan makna di balik tarian ini. </p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Festival Budaya Tahunan</h4>
                            <p>Adakan festival budaya tahunan yang khusus menampilkan Tari Lahbako. Undang kelompok tari dari berbagai daerah untuk berpartisipasi dan berkompetisi.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Kolaborasi dengan Seniman Muda</h4>
                            <p>Ajak seniman muda untuk menciptakan karya seni kontemporer yang terinspirasi dari Tari Lahbako. Hal ini dapat menarik minat generasi muda terhadap tarian tradisional.</p>
                        </div>
                    </div>
                </li>
            </ol>

        </div>
    </div>

    <div class="pb-14 pt-14 px-4">
        <div class="content mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Acara Kebudayaan Tari</h2>
            </div>
    
            <div
                class="mt-10 grid max-[440px]:grid-cols-1 grid-cols-2 md:grid-cols-3 gap-10 place-items-center">
                <div
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-44 sm:h-64 object-cover object-center"
                            src="{{ asset('assets/img/event1.jpg') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Event
                            Senar Jember</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">09:00 --
                                12:00</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">20 Maret
                                2022</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Kaliwates, Lippo Plaza Jember</p>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-44 sm:h-64 object-cover object-center"
                            src="{{ asset('assets/img/event1.jpg') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Event
                            Senar Jember</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">09:00 --
                                12:00</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">20 Maret
                                2022</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Kaliwates, Lippo Plaza Jember</p>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-44 sm:h-64 object-cover object-center"
                            src="{{ asset('assets/img/event1.jpg') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Event
                            Senar Jember</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">09:00 --
                                12:00</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">20 Maret
                                2022</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Kaliwates, Lippo Plaza Jember</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
