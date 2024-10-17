@extends('layouts.app')

@section('title', 'Tari Pandhalungan - Jember Art Dance')

@section('content')

    <div class="pt-40 pb-14 px-4">
        <div class="content mx-auto">
            <div
                class="relative tari-pandhalungan rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex flex-col min-[540px]:flex-row min-[540px]:justify-between gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">PESONA TARI SEMARAK PANDHALUNGAN,
                        </h1>
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA
                            NUSANTARA</h1>
                    </div>
                </div>

                <div class="z-20">
                    <iframe
                        class="rounded-xl md:rounded-2xl lg:rounded-3xl w-full h-[200px] min-[540px]:w-[230px] min-[540px]:h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]"
                        src="https://www.youtube.com/embed/sTEG0gFR8Jw?si=kEj-1tPB72XY4Ub9" title="YouTube video player"
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
                <p class="text-lg sm:text-xl text-justify"><span class="font-semibold">Tari Semarak Pandhalungan</span> adalah tarian kreasi <span class="font-semibold">baru</span> yang populer di Jember. Tarian ini
                    merefleksikan semangat kebhinekaan dan kekayaan budaya masyarakat Jember yang terdiri dari
                    berbagai <span class="font-semibold">etnis</span>, seperti Jawa, Madura, dan Osing
                </p>
            </div>

            <div class="mt-14">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="text-xl font-bold underline">Sejarah singkat</span>
                    Tari Semarak Pandhalungan muncul karena adanya kesadaran akan pentingnya melestarikan budaya
                    lokal. Banyak seniman dan kelompok masyarakat dari Jember berupaya menggali dan mengembangkan
                    potensi budaya di <span class="font-semibold">Bumi Pandhalungan</span> ini. Dari sini lah, tercipta sebuah karya seni tari yang
                    merupakan cerminan dari hasil <span class="font-semibold">akulturasi</span> antara budaya Jawa, Madura, dan Osing. 
                </p>
            </div>
        </div>
    </div>

    <div class="pb-32 pt-14 px-4">
        <div class="content mx-auto">
            <div class="flex flex-col">
                <h2 class=" font-extrabold text-4xl mb-2"><span class="text-green-700">Kostum</span> Penari</h2>
                <div class="relative mb-28 pr-10 rounded-e-[100px] bg-slate-300 pl-10">


                    <div class="flex flex-col md:flex-row items-center gap-5 py-5">
                        <img class="md:mr-24 w-[222px] h-[292px] object-cover" src="{{ asset('assets/img/kostum/semarak.png') }}" alt="">

                        <p class="text-base sm:text-xl">Kostum Tari Semarak Pandhalungan sangat beragam, mencerminkan kekayaan budaya Jember. Sebagai
                            tarian kreasi baru yang terus berkembang, kostumnya tidak memiliki standar baku. Umumnya, kostum
                            ini menggabungkan unsur-unsur budaya Jawa, Madura, dan Osing, seperti batik, kebaya, sarong, dan
                            motif khas Osing yang terinspirasi dari alam. Ciri-ciri kostum ini meliputi warna cerah yang mencolok,
                            motif alami, serta penggunaan aksesoris seperti kalung dan gelang untuk mempercantik penampilan
                            penari. Terkadang, kostum juga dipadukan dengan elemen modern, seperti bahan sintetis dan potongan
                            yang lebih simpel.</p>
                    </div>
                </div>

                <h2 class="text-end mb-2 font-extrabold text-4xl"><span class="text-green-700">Alat</span> & <span
                        class="text-green-700">Musik</span> Pengiring</h2>
                <div class="relative mb-28 pr-10 rounded-s-[100px] bg-slate-300 pl-10">

                    <div class="flex flex-col-reverse md:flex-row items-center gap-5 py-5">
                        <p class="text-base sm:text-xl">
                            Musik yang digunakan untuk mengiri Tari Semarak Pandhalungan ini adalah musik patrol, seperti hal
                            nya Tari Lahbako. Terdapat beberapa alat musik seperti seruling, kendang, saron/demung, dan
                            kentongan yang dimainkan oleh 4-8 orang laki-laki.

                        </p>

                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/musik/semarak.png') }}" alt="Alat musik pengiring tari semarak pandhalungan">
                    </div>

                </div>

                <h2 class="font-extrabold text-4xl mb-2"><span class="text-green-700">Karakteristik</span> Tari</h2>
                <div class="relative pr-10 rounded-e-[100px] bg-slate-300 pl-10">


                    <div class="flex flex-col md:flex-row gap-5 items-center py-5">
                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/karakteristik/semarak.png') }}" alt="Karakteristik tari semarak pandhalungan">

                        <p class="text-base sm:text-xl">
                            Tarian ini memadukan banyak elemen dari budaya Jawa, Madura, dan Osing. Semua gerakan nya
                            menggambarkan kehidupan sehari-hari masyarakat Jember, seperti kegiatan pertanian, perikanan, atau
                            upacara adat.
                        </p>
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
                    <p class="text-lg ml-2">
                        Tujuan diciptakannya tari ini adalah sebagai sarana untuk memupuk rasa persatuan dan kesatuan antar
                        budaya di Kabupaten Jember. Diharapkan dengan adanya tarian ini, masyarakat dapat terus menjaga
                        keharmonisan dalam hidup berdampingan walaupun berasal dari suku yang berbeda.
                    </p>
                </li>
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center bg-gray-400 w-8 h-8 rounded-full -start-4 ring-4 ring-white">
                    </span>
                    <h3 class="font-extrabold text-4xl leading-tight ml-2">Cara <span class="text-white">Melestarikan</span>
                    </h3>

                    <div class="grid md:grid-cols-3 gap-5 mt-4 ml-2">
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Pengembangan Wisata Budaya</h4>
                            <p>Ciptakan paket wisata yang menggabungkan kunjungan ke situs-situs
                                bersejarah di wilayah Pandhalungan dengan pertunjukan Tari Semarak Pandhalungan.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Pembentukan Sanggar Tari Komunitas</h4>
                            <p>Bentuk sanggar tari komunitas di berbagai desa di wilayah
                                Pandhalungan. Hal ini akan memudahkan masyarakat untuk belajar dan melestarikan tarian ini.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Dokumentasi Video Interaktif</h4>
                            <p>Buat video interaktif yang menjelaskan sejarah, makna, dan gerakan
                                Tari Semarak Pandhalungan. Video ini dapat diakses melalui platform digital seperti YouTube.</p>
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

            <div class="mt-10 grid max-[440px]:grid-cols-1 grid-cols-2 md:grid-cols-3 gap-10 place-items-center">
                <a href="/event/lomba-tari-tradisional"
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-56 sm:h-72 object-cover object-top"
                            src="{{ asset('assets/img/poster1.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lomba
                            Tari Tradisional</h5>

                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]"> 09.00 –
                                16.00
                            </p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]"> 5
                                Desember 2024</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Kaliwates, Jl. PB Sudirman, Kp. Using, Jemberlor, Kec. Patrang,</p>
                        </div>
                    </div>
                </a>
                <a href="/event/festival-kesenian-nusantara"
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-56 sm:h-72 object-top object-cover"
                            src="{{ asset('assets/img/poster2.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Festival
                            Kesenian Nusantara</h5>

                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">08.00 –
                                15.00</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">10
                                November 2024</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Jl. Slamet Riyadi No.168, Baratan, Kec. Patrang</p>
                        </div>
                    </div>
                </a>
                <a href="/event/pagelaran-wayang-kulit"
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-56 sm:h-72 object-cover object-top"
                            src="{{ asset('assets/img/poster3.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                            Pagelaran Wayang Kulit</h5>

                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">21.00 –
                                23.30</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">21
                                Desember 2024</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">
                                Pagah, Jemberlor, Patrang, Jember, 68118</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@endsection
