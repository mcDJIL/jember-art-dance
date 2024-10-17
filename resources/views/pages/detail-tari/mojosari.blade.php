@extends('layouts.app')

@section('title', 'Tari Mojosari - Jember Art Dance')

@section('content')

    <div class="pt-40 pb-14 px-4">
        <div class="content mx-auto">
            <div
                class="relative tari-mojosari rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex flex-col min-[540px]:flex-row min-[540px]:justify-between gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">PESONA TARI MOJOSARI,
                        </h1>
                        <h1 class="font-extrabold text-lg min-[540px]:text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA
                            NUSANTARA</h1>
                    </div>
                </div>

                <div class="z-20">
                    <iframe
                        class="rounded-xl md:rounded-2xl lg:rounded-3xl w-full h-[200px] min-[540px]:w-[230px] min-[540px]:h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-28 px-4">
        <div class="content mx-auto">
            <div class="">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="font-semibold">Tari Mojosari</span> adalah salah satu tarian khas Jember yang merupakan perwujudan dari semangat
                    pandhalungan, yaitu perpaduan budaya Jawa, Madura, dan Osing yang sangat kental di wilayah Jember
                </p>
            </div>

            <div class="mt-14">
                <p class="text-lg sm:text-xl text-justify">
                    <span class="text-xl font-bold underline">Sejarah singkat</span>
                    Tari Mojosari diciptakan oleh <span class="font-semibold">Yeni Insani Putri</span>, salah satu seniman asal Jember. Penamaan Mojosari
adalah gabungan dari tiga nama suku. “<span class="font-semibold">M</span>” yang berarti <span class="font-semibold">Madura</span>, “<span class="font-semibold">O</span>” yang diambil dari kata <span class="font-semibold">Osing</span>, salah
satu suku asli di Banyuwangi, dan “<span class="font-semibold">Ja</span>” berarti <span class="font-semibold">Jawa</span>. Sedangkan “<span class="font-semibold">Sari</span>” bermakna <span class="font-semibold">gadis Jember</span>.
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
                        <img class="w-[222px] h-[292px] object-cover" src="{{ asset('assets/img/timeline-1.png') }}" alt="">

                        <p class="text-base sm:text-xl">
                            Kostum yang digunakan dalam Tari Mojosari juga mencerminkan keberagaman budaya Pandhalungan.
Penari biasanya mengenakan kostum yang berwarna-warni dan berhias ornamen khas Jawa, Madura,
atau Osing.
                        </p>
                    </div>
                </div>

                <h2 class="text-end mb-2 font-extrabold text-4xl"><span class="text-green-700">Alat</span> & <span
                        class="text-green-700">Musik</span> Pengiring</h2>
                <div class="relative mb-28 pr-10 rounded-s-[100px] bg-slate-300 pl-10">

                    <div class="flex flex-col-reverse md:flex-row items-center gap-5 py-5">
                        <p class="text-base sm:text-xl">
                            Tari Mojosari merupakan perpaduan dari tiga budaya, yaitu Madura, Osing, dan Jawa, yang
menghasilkan gerakan tarian unik dan penuh makna. Tarian ini diiringi oleh gamelan Jawa yang
memiliki irama dinamis dan meriah, sangat cocok untuk mencerminkan keanekaragaman budaya dalam
satu kesatuan. Setiap elemen tarian, mulai dari musik hingga gerakannya, menggambarkan kekayaan
budaya yang berbeda, tetapi tetap selaras. Tarian ini menjadi simbol harmoni budaya yang menyatu
dalam ekspresi seni dan tradisi yang khas.
                        </p>

                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/musik/mojosari.png') }}" alt="Alat musik pengiring tari mojosari">
                    </div>

                </div>

                <h2 class="font-extrabold text-4xl mb-2"><span class="text-green-700">Karakteristik</span> Tari</h2>
                <div class="relative pr-10 rounded-e-[100px] bg-slate-300 pl-10">


                    <div class="flex flex-col md:flex-row gap-5 items-center py-5">
                        <img class="w-[222px] object-cover" src="{{ asset('assets/img/karakteristik/mojosari.png') }}" alt="Karakteristik tari can macanan kadduk">

                        <p class="text-base sm:text-xl">
                            Tari Mojasari menampilkan karakter gadis Jember melalui perpaduan budaya Madura, Osing, dan Jawa.
Gerakan dasar tarian ini, seperti mendhak, gagahan, ngrayung, ngambeng, dan ulap-ulap, mencerminkan
ciri khas tari dari setiap suku tersebut. Misalnya, mendhak dilakukan dengan posisi tubuh merendah,
sementara gagahan terinspirasi dari tari remo yang umumnya dibawakan laki-laki. Setiap gerakan
memiliki keunikannya, seperti ngrayung dengan telapak tangan terbuka dan ulap-ulap yang menyerupai
gerakan hormat. Selain gerakan, penari juga harus menampilkan menampilkan karakter ayu, yang
secara istilah disebut leter.
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
                        Diciptakannya Tari Mojosari ini didasari oleh keinginan untuk menyatukan beragam budaya yang ada di
wilayah Jember. Inspirasi tarian ini berasal dari kekayaan budaya Madura, Osing, dan Jawa, yang hidup
berdampingan di satu tempat. Melalui Tari Mojosari, diharapkan masyarakat Jember dapat terus
menghidupkan semangat kebhinekaan dan memupuk rasa cinta terhadap tanah air. Tarian ini tidak
hanya menjadi simbol persatuan, tetapi juga media untuk mempererat hubungan antarbudaya dan
menjaga warisan tradisional agar tetap lestari bagi generasi mendatang.
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
                            <h4 class="font-semibold text-xl mb-2">Pengembangan Kostum dan Propertinya</h4>
                            <p>Lakukan penelitian mendalam mengenai kostum dan
                                properti asli Tari Mojosari. Buat replika yang berkualitas tinggi dan awet untuk digunakan dalam
                                pertunjukan.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Kerjasama dengan Pemerintah Desa</h4>
                            <p>Ajak pemerintah desa untuk menjadikan Tari Mojosari sebagai
                                bagian dari agenda kegiatan desa, seperti acara panen atau hari jadi desa.</p>
                        </div>
                        <div class="p-4 bg-green-700 text-white rounded-2xl">
                            <h4 class="font-semibold text-xl mb-2">Penyelenggaraan Lomba Tari Tingkat Anak-anak</h4>
                            <p>Adakan lomba tari tingkat anak-anak untuk
                                menarik minat generasi muda dalam mempelajari Tari Mojosari.</p>
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
