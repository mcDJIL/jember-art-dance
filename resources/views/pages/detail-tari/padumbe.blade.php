@extends('layouts.app')

@section('title', 'Tari Padumbe - Jember Art Dance')

@section('content')

    <div class="pt-40 pb-14 px-4">
        <div class="content mx-auto">
            <div
                class="relative tari-padumbe rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex flex-col min-[540px]:flex-row min-[540px]:justify-between gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">PESONA TARI PADUMBE,
                        </h1>
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA
                            NUSANTARA</h1>
                    </div>
                </div>

                <div class="z-20">
                    <iframe
                        class="rounded-xl md:rounded-2xl lg:rounded-3xl w-full h-[200px] min-[540px]:w-[230px] min-[540px]:h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]"
                        src="https://www.youtube.com/embed/CUdAt_N4PUI?si=l0LBh5_ntcrRh2u2" title="YouTube video player"
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
                <p class="text-lg sm:text-xl text-justify">
                    <span class="font-semibold">Tari Padumbe</span> adalah tarian tradisional yang berasal dari Kecamatan <span class="font-semibold">Sumberjambe</span>, Kabupaten
                    Jember. Tarian ini diciptakan sebagai bentuk ungkapan syukur dan sukacita masyarakat atas hasil
                    <span class="font-semibold">panen durian</span> yang melimpah. Durian sendiri merupakan buah khas Jember yang sangat digemari oleh
                    masyarakat.
                </p>
            </div>

            <div class="mt-14">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="text-xl font-bold underline">Sejarah singkat</span>
                    Tari Padumbe relatif masih tergolong <span class="font-semibold">baru</span> jika dibandingkan dengan tarian tradisional lainnya di
                    Jember. Tarian ini diciptakan oleh sebuah sanggar tari yang berada di Kecamatan sekitar
                    tahun <span class="font-semibold">2018</span>. Tujuan utama penciptaan tarian ini adalah untuk melestarikan budaya lokal dan
                    mengangkat potensi wisata daerah melalui kekhasan buah durian.
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
                        <img class="w-[222px] h-[292px] object-cover" src="{{ asset('assets/img/kostum/kostum-padumbe.png') }}" alt="">

                        <p class="text-base sm:text-xl">
                            Para penari Padumbe biasanya memakai kostum penari yang berwarna cerah dan dihiasi dengan motif
                            buah durian serta hiasan kepala yang berbentuk daun pohon durian. Penari akan membawa wakul, atau
                            wadah yang digunakan sebagai tempat untuk menyimpan atau menyajikan nasi yang terbuat dari
                            anyaman bambu. Wakul ini direpresentasikan sebagai wadah untuk para petani mengumpulkan buah
                            durian yang sudah dipanen.
                        </p>
                    </div>
                </div>

                <h2 class="text-end mb-2 font-extrabold text-4xl"><span class="text-green-700">Alat</span> & <span
                        class="text-green-700">Musik</span> Pengiring</h2>
                <div class="relative mb-28 pr-10 rounded-s-[100px] bg-slate-300 pl-10">

                    <div class="flex flex-col-reverse md:flex-row items-center gap-5 py-5">
                        <p class="text-base sm:text-xl">
                            Tari Padumbe memiliki gerakan dengan makna sebagai rasa syukur terhadap panen durian yang
                            melimpah, dipadukan dengan musik pengiring <span class="font-semibold">patrol</span>, menjadikan tarian ini mempunyai kisah dan
                            makna yang dalam.
                        </p>

                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/musik/padumbe.png') }}" alt="Alat musik pengiring tari padumbe">
                    </div>

                </div>

                <h2 class="font-extrabold text-4xl mb-2"><span class="text-green-700">Karakteristik</span> Tari</h2>
                <div class="relative pr-10 rounded-e-[100px] bg-slate-300 pl-10">


                    <div class="flex flex-col md:flex-row gap-5 items-center py-5">
                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/kostum/kostum-padumbe.png') }}" alt="Karakteristik tari padumbe">

                        <p class="text-base sm:text-xl">
                           <span class="font-semibold">- Memetik Durian</span>: Gerakan ini menggambarkan aktivitas para petani dalam memetik durian dari
                            pohon. Gerakannya yang lincah dan hati-hati mencerminkan ketelitian dalam memilih durian yang
                            matang. <br><br>
                            <span class="font-semibold">- Membawa Durian</span>: Gerakan membawa durian menggambarkan hasil panen yang melimpah.
                            Gerakan ini juga bisa diartikan sebagai simbol rezeki yang berlimpah. <br><br>
                            <span class="font-semibold">- Menikmati Durian</span>: Gerakan ini menggambarkan ekspresi kegembiraan dan rasa syukur atas hasil
                            panen yang melimpah.
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
                        Diciptakannya Tari Padumbe oleh masyarakat Sumberjambe adalah sebagai rasa syukur agar nikmat
                        panen durian melimpah yang diberikan Tuhan. Juga tarian ini sebagai upaya untuk melestarikan budaya
                        lokal dan mempromosikan potensi wisata daerah kebun durian di Kecamatan Sumberjambe, Kabupaten
                        Jember setempat. 
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
                            <h4 class="font-semibold text-xl mb-2">Penelitian Mendalam tentang Makna Filosofis</h4>
                            <p>Lakukan penelitian mendalam tentang makna filosofis
                                yang terkandung dalam Tari Padumbe. Hasil penelitian ini dapat digunakan sebagai bahan sosialisasi
                                kepada masyarakat luas. </p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Kolaborasi dengan Musisi Lokal</h4>
                            <p>Lakukan penelitian mendalam tentang makna filosofis
                                yang terkandung dalam Tari Padumbe. Hasil penelitian ini dapat digunakan sebagai bahan sosialisasi
                                kepada masyarakat luas.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Pemanfaatan Media Sosial</h4>
                            <p>Gunakan media sosial untuk mempromosikan Tari Padumbe. Buat konten
                                yang menarik seperti video pendek, foto, dan cerita tentang tarian ini.</p>
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
