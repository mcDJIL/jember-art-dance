@extends('layouts.home')

@section('title', 'Jember Art Dance')

@include('_js.index')

@section('content')
<div class="carousel w-screen overflow-hidden relative">
    <div class="list">
        <div class="item">
            <img class="" src="{{ asset('assets/img/jember.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Ayo Jelajahi</div>
                <div class="topic">Budaya Timur Jawa</div>
                <div class="des">
                    Jember Art Dance adalah portal lengkap tentang seni tari tradisional Jember. Di sini, kamu akan menemukan 
                    berbagai informasi menarik, mulai sejarah dan karakteristik khusus setiap tarinya, hingga event dan festival tari yang 
                    siap membuat kamu terpukau. Jelajahi website kami dan mari bersama-sama melestarikan warisan budaya 
                    Jember!</div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="" src="{{ asset('assets/img/lahbako.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Lahbako</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
Tari Lahbako dari Jember terinspirasi dari keseharian petani tembakau, menggambarkan proses mulai dari penanaman hingga pengemasan. Ditampilkan oleh 4-8 penari, tarian ini menghargai peran perempuan Jember yang banyak terlibat dalam pengelolaan tembakau.
                </div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                    <a href="/tari-lahbako"><button>SELENGKAPNYA</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/sp3.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Semarak Pandhalungan</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Tari Semarak Pandhalungan dari Jember adalah tarian kreasi baru yang mencerminkan semangat kebhinekaan dan kekayaan budaya beragam etnis, seperti Jawa, Madura, dan Osing.
                </div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                    <a href="/tari-pandhalungan"><button>SELENGKAPNYA</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/padumbe.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Padumbe</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Tari Padumbe dari Kecamatan Sumberjambe, Jember, adalah tarian tradisional yang mengekspresikan syukur dan sukacita masyarakat atas panen durian yang melimpah, buah khas yang sangat digemari di Jember.
                </div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                    <a href="/tari-padumbe"><button>SELENGKAPNYA</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/parvva 1.png') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Mojosari</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Tari Mojosari adalah salah satu tarian khas Jember yang merupakan perwujudan dari semangat pandhalungan, yaitu perpaduan budaya Jawa, Madura, dan Osing yang sangat kental di wilayah Jember.
                </div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                    <a href="/tari-mojosari"><button>SELENGKAPNYA</button></a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/cmk6.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Can Macanan Kadduk</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">

Can Macanan Kaduk, yang berarti "harimau buatan dari karung," adalah seni pertunjukan dengan kostum harimau raksasa dari karung goni, dimainkan oleh sekelompok orang.
                </div>
                <div class="buttons">
                    <button class="jelajahi" data-target="tentang">JELAJAHI</button>
                    <a href="/tari-macan-kadduk"><button>SELENGKAPNYA</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="thumbnail">
        <div class="item">
            <img src="{{ asset('assets/img/jember.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Jember Art Dance
                </div>


            </div>
        </div>

        <div class="item">
            <img src="{{ asset('assets/img/lahbako.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Lahbako
                </div>


            </div>
        </div>

        <div class="item">
            <img src="{{ asset('assets/img/sp3.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Semarak Pandhalungan
                </div>


            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/padumbe.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Padumbe
                </div>


            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/parvva 1.png') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Mojosari
                </div>


            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/cmk6.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Can Macanan Kadduk
                </div>


            </div>
        </div>
    </div>

    <div class="arrows">
        <button id="prev">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button id="next">
            <i class="fa-solid fa-arrow-right">
            </i></button>
    </div>

    <div class="time"></div>
</div>

<section id="tentang">
    <div class="py-28 px-4">
        <div class="content mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Mengenal Kabupaten Jember Lebih Dekat</h2>
            </div>
    
            <div class="mt-16 flex flex-col md:flex-row gap-10 justify-between">
                <div class="">
                    <iframe class="w-full md:w-100 lg:w-120 h-[200px] min-[540px]:h-[300px]" src="https://www.youtube.com/embed/93l1y9ALnFk?si=3WjumVmGGWFzNFTO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
    
                <div class="md:max-w-sm lg:max-w-lg xl:max-w-3xl">
                    <p
                        class="font-hind text-justify max-[400px]:text-sm max-[768px]:text-xl max-[820px]:text-xs min-[820px]:text-sm lg:text-xl">
                        Jember, dikenal sebagai "Bumi Pandhalungan", adalah sebuah kota yang terletak di ujung timur Pulau Jawa, tepat berada di lereng Pegunungan Hiang dan Gunung Argopuro. Memiliki letak geografis yang sangat strategis, menjadikan Jember mempunyai banyak lokasi wisata alam yang dapat kamu kunjungi. Tak hanya itu, Jember juga memiliki komoditi kekayaan alam yang cukup beragam. Dengan luas daratan 2.431 km<sup>2</sup> menjadikan Kabupaten Jember memiliki banyak potensi dalam bidang pertanian seperti padi, jagung, kopi, tembakau, dan coklat.   
                    </p>
                    <p
                        class="mt-4 font-hind text-justify max-[400px]:text-sm max-[768px]:text-xl max-[820px]:text-xs min-[820px]:text-sm lg:text-xl">
                        “Tunggu apa lagi? Ayo nikmati keindahan alamnya dan seru-seruan di festival-festival budayanya. Jember siap bikin petualanganmu seru dan penuh kenangan!”
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sanggar">
    <div class="pb-28 pl-4 px-4 md:px-0 md:pl-4 relative">
        <div class="content mx-auto">
            <div class="flex flex-col md:flex-row justify-between md:gap-10 lg:gap-16">
                <div class="mt-0 md:mt-10 md:ml-0">
                    <div class="">
                        <h2 class="text-3xl font-bold">Sanggar Tari di</h2>
                        <h2 class="text-3xl font-bold">Kabupaten Jember</h2>
                    </div>
    
                    <div class="mt-10 lg:max-w-xl md:max-w-96">
                        <p class="font-hind md:text-base lg:text-xl text-justify">Jelajahi keindahan seni tari tradisional Jember di berbagai sanggar tari lokal. Kunjungi sanggar-sanggar terbaik berikut, di mana para penari siap memukau kamu dengan tarian yang memukau. Setiap kunjungan tak hanya menghadirkan keindahan, tapi juga membantu melestarikan warisan budaya Indonesia.
                        </p>
                    </div>
                </div>
    
                <div class="swiper sanggar-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/vpTh6dRuQRCP61qs9" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/sanggar2.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Rias Busana
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="swiper-location absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs font-medium">Ambulu, Kec. Ambulu, 68172</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/HLpsyPs6AjxNV2gz7" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/sanggar4.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Cemara Biru
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs">Baratan, Kec. Patrang , 68112</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/LMfUwaMjDa9xJX44A" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/sanggar1.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Kartika Budaya
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs">Ambulu, Kec. Ambulu, 68172</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/uw1yNVYcgdbBjsZJ9" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/sanggar3.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Gelar Budaya
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs">Sidomekar, Kec. Semboro, 68175</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/qiLXB9oB8CZHfz1r9" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/trikhasima.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Trikhasima
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs">Slawu, Kec. Patrang, 68116</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://maps.app.goo.gl/BxFvzTNgntziDpQ67" target="_blank" class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                                <img class="w-full h-96 object-cover rounded-xl"
                                    src="{{ asset('assets/img/hastarini.png') }}" alt="">
    
                                <div class="absolute text-center w-full top-6">
                                    <h3 class="text-white font-hind font-medium md:text-xl xl:text-2xl">Sanggar Hastarini
                                    </h3>
    
                                    <div class="text-yellow-300 text-sm flex gap-1.5 justify-center">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
    
                                <div
                                    class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                    <div class="text-red-600 text-base">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
    
                                    <div class="">
                                        <p class="font-hind text-xs">Kebonsari, Kec. Sumbersari, 68122</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
    
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="perkembangan">
    <div class="bg-timeline-top flex justify-center items-end md:items-center px-4">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-black">Jejak Emas Tari Tradisional di Jember</h2>
        </div>
    </div>
</section>
<div class="pb-14 px-4 bg-[rgb(252,205,42,0.64)] overflow-hidden relative">
    <div class="content mx-auto relative">

        <ol class="mt-10 grid grid-cols-1 sm:grid-rows-1 md:grid-cols-3 gap-6 ">
            <li id="lahbako" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 lg:max-w-[400px] xl:max-w-[450px]">
            <img class="absolute -right-8 -top-8 w-[100px] object-cover" src="{{ asset('assets/img/kostum/canmacanan.png') }}" alt=""> 
            
                <!-- <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tari Lahbako</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Diciptakan pada tahun 1970-an</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Koreografi tarian ini diciptakan oleh Bagong Kusdiarjo</p>
                </div> -->

                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Can Macanan Kadduk</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Kesenian ini telah ditampilkan sejak tahun 1974</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Kesenian ini menampilkan pertunjukan sekelompok orang yang mengenakan kostum harimau raksasa yang terbuat
                    dari karung goni.</p>
                </div>
                
            </li>
            <li id="tari-3" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 lg:max-w-[400px] xl:max-w-[450px]">
                <img class="absolute -right-8 -bottom-8 w-[80px] object-cover" src="{{ asset('assets/img/kostum/semarak.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tari Semarak Pandhalungan</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Diciptakan pada tahun 2016</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Tari ini diciptakan oleh Enys Kartika, S. Pd. , tari ini dari Sanggar Seni Kartika Budaya.
                    </p>
                </div>
            </li>
            <li id="tari-5" class="content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl relative sm:mb-0 min-[900px]:w-[280px] lg:w-[315px] xl:w-[410px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">    
                
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tari Mojosari</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Diciptakan pada tahun 2022</time>
                    <p class="md:max-w-72 text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Tari Mojosari merupakan salah satu diantara tarian asli Jember yang dimodifikasi dari beberapa tarian.
                    </p>
                </div>
            </li>
        </ol>

        <div id="timeline" class="md:w-full md:py-14 relative">
            {{-- garis timeline --}}
            <div class="md:w-full md:h-1 md:bg-black mx-auto md:relative md:z-0">
                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:left-[13.9%] font-semibold">1974</span>
                <div id="timeline-lahbako" class="timeline-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[14%]"></div>

                <span class="md:absolute md:top-1/2 md:transform md:translate-y-[70%] md:left-[31.9%] font-semibold">1984</span>
                <div id="timeline-2" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[32%]"></div>

                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:left-[48.9%] font-semibold">2016</span>
                <div id="timeline-3" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[49%]"></div>

                <span class="md:absolute md:top-1/2 md:transform md:translate-y-[70%] md:right-[31.9%] font-semibold">2018</span>
                <div id="timeline-4" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:right-[32%]"></div>

                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:right-[13.9%] font-semibold">2022</span>
                <div id="timeline-5" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:right-[14%]"></div>
            </div>
        </div>

        <ol class="w-full mt-6 md:mt-0 md:items-center flex flex-col md:flex-row md:justify-center md:gap-x-[35px] gap-6">
            <li id="tari-4" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 min-[900px]:w-[280px] lg:w-[315px] xl:w-[410px]">
                <img class="absolute -right-16 -bottom-8 w-[100px] object-cover h-[211px]" src="{{ asset('assets/img/kostum/lahbako.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tari Lahbako</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Diciptakan pada tahun 1984</time>
                    <p class="md:max-w-72 text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Tari Lahbako merupakan tarian yang terinspirasi dari keseharian petani tembakau di Jember.
                    </p>
                </div>
            </li>
            <li id="tari-4" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 min-[900px]:w-[280px] lg:w-[315px] xl:w-[410px]">
                <img class="absolute -right-16 -bottom-8 w-[100px] object-cover h-[211px]" src="{{ asset('assets/img/kostum/kostum-padumbe.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tari Padumbe</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Diciptakan pada tahun 2018</time>
                    <p class="md:max-w-72 text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Tarian ini diciptakan di Sanggar Sari yang ada di Kecamatan Sumberjambe, Kabupaten Jember.
                    </p>
                </div>
            </li>
        </ol>
    </div>
</div>
<div class="bg-timeline-bottom"></div>

<section id="kesenian">
    <div class="pb-28 pt-14 px-4 overflow-hidden">
        <div class="content mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Kesenian Populer di Timur Jawa</h2>
            </div>
    
            <div class="grid grid-cols-2 sm:grid-cols-5 gap-2 sm:gap-4 lg:gap-8 mt-10 relative">
                <div class="overlay-galeri"></div>
    
                <div class="relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/jarankencak.jpg') }}" alt="">
                    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Jaran Kencak</p>
                    </div>
                </div>
                <div class="row-span-2 relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/jfc.jpg.webp') }}" alt="">
    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Jember Fashion Carnaval</p>
                    </div>
                </div>
                <div class="relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/totaanmerpati.jpg') }}" alt="">
                    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Tota'an Merpati</p>
                    </div>
                </div>
                <div class="relative col-span-2">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/larungsesaji.jpg') }}" alt="">
    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Larung Sesaji</p>
                    </div>
                </div>
                <div class="relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/kerapansapi.jpg') }}" alt="">
    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Kerapan Sapi</p>
                    </div>
                </div>
                <div class="col-span-2 order-last sm:order-6 relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-cover lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/reog.jpg') }}" alt="">
    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Reog</p>
                    </div>
                </div>
                <div class="order-6 sm:order-7 relative">
                    <img loading="lazy"
                        class="galeri rounded-md sm:rounded-xl object-covers lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                        src="{{ asset('assets/img/musikpatrol.jpg') }}" alt="">
    
                    <div class="absolute galeri-teks">
                        <p class="font-hind text-[8px] md:text-sm">Musik Patrol</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="acara">
    <div class="pb-28 px-4">
        <div class="content mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Acara Kebudayaan Tari</h2>
            </div>
    
            <div
                class="mt-10 grid max-[440px]:grid-cols-1 grid-cols-2 md:grid-cols-3 gap-10 place-items-center">
                <a href="/event/lomba-tari-tradisional"
                    class="max-w-56 sm:max-w-80 bg-[#FFF6D5] rounded-xl transition-all duration-[0.5s] overflow-hidden border-2 border-transparent hover:border-green-600 hover:-translate-y-6 shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] hover:shadow-[0_6px_7px_1px_rgb(0,0,0,0.3)]">
                    <div class="px-4 pt-4">
                        <img class="rounded-xl w-full h-56 sm:h-72 object-cover object-top"
                            src="{{ asset('assets/img/poster1.png') }}" alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Lomba Tari Tradisional</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]"> 09.00 – 16.00
                            </p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]"> 5 Desember 2024</p>
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
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Festival Kesenian Nusantara</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">08.00 – 15.00</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">10 November 2024</p>
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
                        <h5 class="mb-2 text-sm sm:text-lg font-bold tracking-tight text-gray-900 dark:text-white">Pagelaran Wayang Kulit</h5>
    
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-clock"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">21.00 – 23.30</p>
                        </div>
                        <div class="text-xs sm:text-base text-green-700 flex gap-2 items-center pl-1">
                            <i class="fa-solid fa-calendar"></i>
                            <p class="font-hind font-semibold text-gray-800 dark:text-white relative top-[1.2px]">21 Desember 2024</p>
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
</section>

<section id="testimoni">
    <div class="pt-12 md:pt-20 pb-20 bg-[#FCCD2A]">
        <div class="w-full">
            <div class="w-full swiper testimoni-swiper relative h-[450px] md:h-[620px]">
                <div class="swiper-wrapper justify-center">
                    <div class="swiper-slide testimoni-slide place-content-center relative">
                        <div class="bg-white rounded-2xl md:rounded-3xl relative max-w-lg md:max-w-4xl mx-auto">
                            <div class="absolute -top-[7%] min-[540px]:-top-[8%] left-[10%] md:-top-[6%] md:left-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                
                            <div class="border-4 md:border-8 border-green-700 rounded-full absolute -top-[20%] min-[540px]:-top-[23%] md:-top-[23%] left-1/2 -translate-x-1/2 max-[540px]:w-[100px] max-[540px]:h-[100px] min-[540px]:w-[130px] min-[540px]:h-[130px] md:w-[170px] md:h-[170px]">
                                <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/rachel.jpeg') }}" alt="">
                            </div>
                
                            <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Aku merasa bahwa perbedaan antara tari tradisional Jember dan tari tradisional dari daerah lain terletak pada iringan musik dan pakaian yang digunakan, yang mencerminkan identitas daerah tersebut. Tari Jember juga memiliki filosofi dan makna khas yang menggambarkan nilai-nilai budaya setempat.
                            </p>
                
                            <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                                <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">Rachel Edhi Shashanti</h3>
                                <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, Siswi SMKN 3 Jember</p>
                            </div>
                
                            <div class="absolute -bottom-[7%] min-[540px]:-bottom-[8%] right-[10%] md:-bottom-[6%] md:right-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimoni-slide place-content-center relative">
                        <div class="bg-white rounded-2xl md:rounded-3xl relative max-w-lg md:max-w-4xl mx-auto">
                            <div class="absolute -top-[7%] min-[540px]:-top-[8%] left-[10%] md:-top-[6%] md:left-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                
                            <div class="border-4 md:border-8 border-green-700 rounded-full absolute -top-[20%] min-[540px]:-top-[23%] md:-top-[23%] left-1/2 -translate-x-1/2 max-[540px]:w-[100px] max-[540px]:h-[100px] min-[540px]:w-[130px] min-[540px]:h-[130px] md:w-[170px] md:h-[170px]">
                                <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/nada.jpeg') }}" alt="">
                            </div>
                
                            <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Sebagai anak tari saya menyadari bahwa tiap daerah memiliki keunikan tariannya sendiri seperti hal nya kota saya, yaitu kota Jember. Tarian khas yang sangat melekat di kabupaten Jember adalah Tari Lahbako. Tarian ini menceritakan tentang SDA di Jember yaitu kota penghasil tembakau terbaik di Indonesia.</p>
                
                            <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                                <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">Nada Nuri Nugrahayau</h3>
                                <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, Siswi SMAN 3 Jember</p>
                            </div>
                
                            <div class="absolute -bottom-[7%] min-[540px]:-bottom-[8%] right-[10%] md:-bottom-[6%] md:right-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide testimoni-slide place-content-center relative">
                        <div class="bg-white rounded-2xl md:rounded-3xl relative max-w-lg md:max-w-4xl mx-auto">
                            <div class="absolute -top-[7%] min-[540px]:-top-[8%] left-[10%] md:-top-[6%] md:left-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                
                            <div class="border-4 md:border-8 border-green-700 rounded-full absolute -top-[20%] min-[540px]:-top-[23%] md:-top-[23%] left-1/2 -translate-x-1/2 max-[540px]:w-[100px] max-[540px]:h-[100px] min-[540px]:w-[130px] min-[540px]:h-[130px] md:w-[170px] md:h-[170px]">
                                <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/diah.jpeg') }}" alt="">
                            </div>
                
                            <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Yang membedakannya dari tarian khas Jember dengan tarian dari daerah lain adalah kombinasi antara kearifan lokal yang kuat dengan unsur modernitas, seperti yang tercermin dalam Jember Fashion Carnival. Ini membuat tarian dari Jember tidak hanya sekadar mempertahankan tradisi, tetapi juga mampu berkembang tanpa kehilangan identitas.</p>
                
                            <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                                <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">Gusti Diah Sushita Prameswari</h3>
                                <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, Siswi SMAN 4 Jember</p>
                            </div>
                
                            <div class="absolute -bottom-[7%] min-[540px]:-bottom-[8%] right-[10%] md:-bottom-[6%] md:right-[13%] text-white bg-green-700 rounded-full w-[40px] h-[40px] min-[540px]:w-[50px] min-[540px]:h-[50px] place-content-center text-center text-xl min-[540px]:text-2xl">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="testimoni-slider-control relative bottom-12 flex items-center justify-center">
                    <div class="swiper-pagination testimoni-pagination absolute"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
<script>
    document.querySelectorAll('.nav-link').forEach(item => {
        item.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    document.querySelectorAll('.jelajahi').forEach(item => {
        item.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    document.querySelectorAll('.footer-link').forEach(item => {
        item.addEventListener('click', function() {
            const targetId = this.getAttribute('data-footer');
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 50,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Pilih semua elemen dengan class 'nav-link' dan target section
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section');

// Fungsi untuk menambah atau menghapus kelas 'active' sesuai posisi scroll
function onScroll() {
    let scrollPosition = window.scrollY;

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');

        // Cek apakah posisi scroll ada di dalam section
        if (scrollPosition >= sectionTop - 50 && scrollPosition < sectionTop + sectionHeight) {
            navLinks.forEach((link) => {
                link.classList.remove('active'); // Hapus 'active' dari semua link
                if (link.getAttribute('data-target') === sectionId) {
                    link.classList.add('active'); // Tambahkan 'active' ke link saat ini
                }
            });
        }
    });
}

// Jalankan fungsi onScroll saat halaman digulir
window.addEventListener('scroll', onScroll);

</script>

@endpush