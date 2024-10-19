@extends('layouts.app')

@section('title', 'Tari Can Macanan Kadduk - Jember Art Dance')

@section('content')

    <div class="pt-40 pb-14 px-4">
        <div class="content mx-auto">
            <div
                class="relative tari-kadduk rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex flex-col min-[540px]:flex-row min-[540px]:justify-between gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">PESONA CAN MACANAN KADDUK,
                        </h1>
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA
                            NUSANTARA</h1>
                    </div>
                </div>

                <div class="z-20">
                    <iframe
                        class="rounded-xl md:rounded-2xl lg:rounded-3xl w-full h-[200px] min-[540px]:w-[230px] min-[540px]:h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]"
                        src="https://www.youtube.com/embed/3-cmoqROAFI?si=I6DkRGRoDAS_-qL7" title="YouTube video player"
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
                    <span class="font-semibold">Can Macanan Kaduk</span> secara harfiah berarti "harimau buatan dari karung". Diambil dari kata “<span class="font-semibold">Can
                        Macanan</span>” yang artinya “<span class="font-semibold">harimau jadi-jadian</span>” dan “<span class="font-semibold">Kadduk</span>” yang berarti “<span class="font-semibold">karung</span>”. Kesenian ini
menampilkan pertunjukan sekelompok orang yang mengenakan kostum harimau raksasa yang terbuat
dari karung goni.
                </p>
            </div>

            <div class="mt-14">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="text-xl font-bold underline">Sejarah singkat</span>
                    Kesenian Can-Macanan Kadduk pertama kali muncul di Jember pada tahun <span class="font-semibol">1972</span>, ketika seorang petani
sukses di <span class="font-semibol">Tegal Boto</span> menggunakan boneka macan dari tali rafia untuk menjaga sawahnya dari pencuri.
Boneka ini awalnya berfungsi seperti orang-orangan sawah, tetapi berbentuk binatang buas untuk
menakut-nakuti para pencuri. Selain bertani, petani tersebut juga memiliki minat pada seni, dan setelah
terinspirasi dari pertunjukan <span class="font-semibol">Reog Ponorogo</span> yang dilihatnya dalam acara <span class="font-semibol">Sedekah Bumi</span>, ia
menemukan ide untuk mengembangkan boneka tersebut menjadi pertunjukan seni.
Ia kemudian meminta anaknya untuk melanjutkan idenya dengan membuat pertunjukan berbasis
boneka macan tersebut. Anak petani tersebut mengembangkan konsep itu menjadi atraksi yang dikenal
sebagai Can-Macanan Kadduk, yang hingga kini masih eksis dan dipentaskan dalam berbagai acara di
Jember. Salah satu grup kesenian tertua yang mempertahankan tradisi ini adalah Can Macanan Kadduk
<span class="font-semibol">Bintang Timur</span>, yang dipimpin oleh <span class="font-semibol">Sumarto</span> di Jalan Kalimantan, Tegal Boto, Sumbersari, Jember.
Dalam perkembangannya, pertunjukan Can Macanan Kadduk ditambah dengan tari Rajawali atau
Garuda, tari Marlena, tari Buk Sakerah, Pu-Kupuan, Ceng- Kocengan, PeSapean. Seiring dengan
membaurnya etnis lain di Kabupaten Jember sejak tahun 2004 hingga sekarang, sajiannya lebih
bervariasi dengan menampilkan tari-tari dari etnis lain.
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
                        <img class="w-[222px] h-[292px] object-cover" src="{{ asset('assets/img/kostum/canmacanan.png') }}" alt="">

                        <p class="text-base sm:text-xl">
                            Can Macanan Kadduk adalah kesenian yang menggunakan properti barongan berwajah harimau. Barong
adalah topeng besar tiruan harimau yang menutupi seluruh kepala penari, badannya tertutup oleh jubah
yang menyatu dengan topeng. Bentuk topeng barongan Can Macanan Kadduk terbuat dari kayu yang
diukir menyerupai wajah seekor harimau, lengkap dengan taring. Sedangkan bagian badan atau jubah
yang digunakan sebagai baju terbuat dari karung yang serat talinya dihaluskan hingga berbentuk seperti
bulu harimau.
                        </p>
                    </div>
                </div>

                <h2 class="text-end mb-2 font-extrabold text-4xl"><span class="text-green-700">Alat</span> & <span
                        class="text-green-700">Musik</span> Pengiring</h2>
                <div class="relative mb-28 pr-10 rounded-s-[100px] bg-slate-300 pl-10">

                    <div class="flex flex-col-reverse md:flex-row items-center gap-5 py-5">
                        <p class="text-base sm:text-xl">
                            Keseluruhan instrumen yang digunakan dalam pertunjukan Can Macanan Kadduk meliputi, saron,
panthus, selompret, kethuk, gong, kempul, kluncing, kendang banyuwangi, kendang bali, simbal, dan
tambourin yang disajikan berbeda-beda menyesuaikan tema tarian yang disuguhkan.
                        </p>

                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/musik/canmacanan.png') }}" alt="Alat musik pengiring tari can macanan kadduk">
                    </div>

                </div>

                <h2 class="font-extrabold text-4xl mb-2"><span class="text-green-700">Karakteristik</span> Tari</h2>
                <div class="relative pr-10 rounded-e-[100px] bg-slate-300 pl-10">


                    <div class="flex flex-col md:flex-row gap-5 items-center py-5">
                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/karakteristik/canmacanan.png') }}" alt="Karakteristik tari can macanan kadduk">

                        <p class="text-base sm:text-xl">
                            Gerak pada pertunjukan Can Macanan Kadduk merupakan gerak tari rakyat, geraknya sederhana yang
                            berasal dari gerak keseharian dengan polesan atau penghalusan. Pengulangan-pengulangan gerak juga
                            dilakukan oleh penari pada pertunjukan agar durasi menjadi lebih lama. Beberapa gerakan juga
                            diadaptasi dari gerakan yang menyerupai harimau, seperti berjalan, berlari, dan melompat
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
                        Can Macanan Kadduk awalnya adalah sebuah boneka macan yang dibuat oleh petani di Jember untuk
menakut-nakuti pencuri di ladang. Seiring waktu, petani ini berpikir untuk menjadikan boneka macan
ini sebagai sebuah pertunjukan yang mirip dengan Reog Ponorogo. Sehingga terciptalah seni Can
Macanan Kadduk pada tahun 1972 dan hingga saat ini menjadi salah satu warisan budaya yang
membanggakan bagi masyarakat Jember.
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
                            <h4 class="font-semibold text-xl mb-2">Pengembangan Wisata Edukasi</h4>
                            <p>Buat wisata edukasi yang menggabungkan pembelajaran tentang
                                sejarah dan budaya lokal dengan pertunjukan Can Macanan Kadduk.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Kolaborasi dengan Sekolah Seni</h4>
                            <p>Ajak sekolah-sekolah seni untuk membuat koreografi baru
                                berdasarkan gerakan dasar Can Macanan Kadduk.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Pembentukan Kelompok Paduan Suara</h4>
                            <p>Bentuk kelompok paduan suara yang khusus menyanyikan
                                lagu pengiring Can Macanan Kadduk</p>
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
