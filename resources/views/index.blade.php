@extends('layouts.home')

@section('title', 'Jember Art Dance')

@include('_js.index')

@section('content')
<div class="carousel w-screen overflow-hidden relative">
    <div class="list">
        <div class="item">
            <img class="" src="{{ asset('assets/img/lahbako.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Lahbako</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam
                    quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi
                    pariatur? Tempore, non qui.
                </div>
                <div class="buttons">
                    <button>JELAJAHI</button>
                    <button>SELENGKAPNYA</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/pandhalungan.jpg') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Semarak Pandhalungan</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam
                    quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi
                    pariatur? Tempore, non qui.
                </div>
                <div class="buttons">
                    <button>JELAJAHI</button>
                    <button>SELENGKAPNYA</button>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam
                    quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi
                    pariatur? Tempore, non qui.
                </div>
                <div class="buttons">
                    <button>JELAJAHI</button>
                    <button>SELENGKAPNYA</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/parvva 1.png') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Parvvateswara</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam
                    quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi
                    pariatur? Tempore, non qui.
                </div>
                <div class="buttons">
                    <button>JELAJAHI</button>
                    <button>SELENGKAPNYA</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/kuda-kencak.png') }}" alt="">
            <div class="carousel-content">
                <div class="author">Jember Art Dance</div>
                <div class="title">Tari Kuda Kencak</div>
                <div class="topic">Seni & Budaya</div>
                <div class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam
                    quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi
                    pariatur? Tempore, non qui.
                </div>
                <div class="buttons">
                    <button>JELAJAHI</button>
                    <button>SELENGKAPNYA</button>
                </div>
            </div>
        </div>
    </div>

    <div class="thumbnail">
        <div class="item">
            <img src="{{ asset('assets/img/pandhalungan.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Semarak Pandhalungan
                </div>

                <div class="des">
                    Lorem ipsum
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/padumbe.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Padumbe
                </div>

                <div class="des">
                    Lorem ipsum
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/parvva 1.png') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Parvvateswara
                </div>

                <div class="des">
                    Lorem ipsum
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/kuda-kencak.png') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Kuda Kencak
                </div>

                <div class="des">
                    Lorem ipsum
                </div>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('assets/img/lahbako.jpg') }}" alt="">

            <div class="carousel-content">
                <div class="title">
                    Tari Lahbako
                </div>

                <div class="des">
                    Lorem ipsum
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

<div class="py-28 px-4">
    <div class="content mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold">Kabupaten Jember</h2>
        </div>

        <div class="mt-16 flex flex-col md:flex-row gap-10 justify-between">
            <div class="max-w-full md:max-w-100 lg:max-w-120">
                <img class="object-cover" src="{{ asset('assets/img/jember.jpeg') }}" alt="Kantor Bupati Jember">
            </div>

            <div class="md:max-w-sm lg:max-w-lg xl:max-w-3xl">
                <p
                    class="font-hind text-justify max-[400px]:text-sm max-[768px]:text-xl max-[820px]:text-sm min-[820px]:text-base lg:text-xl">
                    Kabupaten Jember, yang terletak di Jawa Timur, adalah destinasi yang memikat dengan perpaduan
                    keindahan alam dan kekayaan budaya yang khas. Dikelilingi pantai eksotis dan perbukitan hijau,
                    Jember juga dikenal akan seni tari tradisionalnya yang kaya makna. Tarian seperti Tari Lahbako, yang
                    mencerminkan kehidupan petani tembakau, menjadi ikon budaya daerah ini. Gerakan anggun pada tarian
                    ini menceritakan proses panen tembakau, komoditas utama Jember yang terkenal hingga mancanegara.</p>
            </div>
        </div>
    </div>
</div>

<div class="pb-28 pl-4 px-4 md:px-0 md:pl-4 relative">
    <div class="content mx-auto">
        <div class="flex flex-col md:flex-row justify-between md:gap-10 lg:gap-16">
            <div class="mt-0 md:mt-10 md:ml-0">
                <div class="">
                    <h2 class="text-3xl font-bold">Sanggar Tari di</h2>
                    <h2 class="text-3xl font-bold">Kabupaten Jember</h2>
                </div>

                <div class="mt-10 lg:max-w-xl md:max-w-96">
                    <p class="font-hind md:text-base lg:text-xl text-justify">Sanggar-sanggar ini telah berperan penting dalam melestarikan budaya Jember melalui seni tari tradisional. Temukan sanggar terdekat yang dapat menghubungkan Anda dengan kekayaan budaya Jember.</p>
                </div>
            </div>

            <div class="swiper sanggar-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="{{ asset('assets/img/sanggar1.png') }}" alt="">

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
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="{{ asset('assets/img/sanggar1.png') }}" alt="">

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
                                class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                <div class="text-red-600 text-base">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div class="">
                                    <p class="font-hind text-xs">Ambulu, Kec. Ambulu, 68172</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="{{ asset('assets/img/sanggar1.png') }}" alt="">

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
                                class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                <div class="text-red-600 text-base">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div class="">
                                    <p class="font-hind text-xs">Ambulu, Kec. Ambulu, 68172</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-item rounded-xl relative flex flex-col items-center shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]">
                            <img class="w-full h-96 object-cover rounded-xl"
                                src="{{ asset('assets/img/sanggar1.png') }}" alt="">

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
                                class="absolute bottom-6 px-5 py-2 rounded-lg flex items-center gap-2 backdrop-blur-sm bg-white/30">
                                <div class="text-red-600 text-base">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>

                                <div class="">
                                    <p class="font-hind text-xs">Ambulu, Kec. Ambulu, 68172</p>
                                </div>
                            </div>
                        </div>
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

<div class="pb-28 px-4 overflow-hidden">
    <div class="content mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold">Tarian Hasil Kolaborasi</h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-5 gap-2 sm:gap-4 lg:gap-8 mt-10 relative">
            <div class="overlay-galeri"></div>

            <div class="relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab1.png') }}" alt="">
                
                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="row-span-2 relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab2.png') }}" alt="">

                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab3.png') }}" alt="">
                
                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="relative col-span-2">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab4.png') }}" alt="">

                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab1.png') }}" alt="">

                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="col-span-2 order-last sm:order-6 relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab5.png') }}" alt="">

                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
            <div class="order-6 sm:order-7 relative">
                <img loading="lazy"
                    class="galeri rounded-md sm:rounded-xl lg:rounded-2xl w-full h-full shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)]"
                    src="{{ asset('assets/img/collab6.png') }}" alt="">

                <div class="absolute galeri-teks">
                    <p class="font-hind text-[8px] md:text-sm">Tari Lorem Ipsum</p>
                    <p class="mt-0.5 md:mt-2 text-[8px] font-hind md:text-sm">Kolaborasi antara Banyuwangi & Jember</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pb-28 px-4">
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

<div class="bg-timeline-top flex justify-center items-end md:items-center">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-black">Perjalanan Budaya Tari di Jember</h2>
    </div>
</div>
<div class="pb-14 px-4 bg-[rgb(252,205,42,0.64)] overflow-hidden relative">
    <div class="content mx-auto relative">

        <ol class="mt-10 grid grid-cols-1 sm:grid-rows-1 md:grid-cols-3 gap-6 ">
            <li id="lahbako" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 lg:max-w-[400px] xl:max-w-[450px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                        on December 2, 2021</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Get started with dozens of web
                        components and interactive elements.</p>
                </div>
            </li>
            <li id="tari-3" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 lg:max-w-[400px] xl:max-w-[450px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                        on December 2, 2021</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Get started with dozens of web
                        components and interactive elements.</p>
                </div>
            </li>
            <li id="tari-5" class="relative content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl sm:mb-0 lg:max-w-[400px] xl:max-w-[450px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">
            
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                        on December 2, 2021</time>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Get started with dozens of web
                        components and interactive elements.</p>
                </div>
            </li>
        </ol>

        <div id="timeline" class="md:w-full md:py-14 relative">
            {{-- garis timeline --}}
            <div class="md:w-full md:h-1 md:bg-black mx-auto md:relative md:z-0">
                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:left-[13.9%] font-semibold">2017</span>
                <div id="timeline-lahbako" class="timeline-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[14%]"></div>

                <span class="md:absolute md:top-1/2 md:transform md:translate-y-[70%] md:left-[31.9%] font-semibold">2017</span>
                <div id="timeline-2" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[32%]"></div>

                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:left-[48.9%] font-semibold">2017</span>
                <div id="timeline-3" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:left-[49%]"></div>

                <span class="md:absolute md:top-1/2 md:transform md:translate-y-[70%] md:right-[31.9%] font-semibold">2017</span>
                <div id="timeline-4" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:right-[32%]"></div>

                <span class="md:absolute md:bottom-1/2 md:transform md:-translate-y-[70%] md:right-[13.9%] font-semibold">2017</span>
                <div id="timeline-5" class="timeline-tari md:px-4 md:py-4 md:bg-white md:absolute md:rounded-full md:top-1/2 md:transform md:-translate-y-1/2 md:right-[14%]"></div>
            </div>
        </div>

        <ol class="w-full mt-6 md:mt-0 md:items-center flex flex-col md:flex-row md:justify-center md:gap-x-[35px] gap-6">
            <li id="tari-2" class="content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl relative sm:mb-0 min-[900px]:w-[280px] lg:w-[315px] xl:w-[410px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">    

                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                        on December 2, 2021</time>
                    <p class="md:max-w-72 text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Get started with dozens of web
                        components and interactive elements.</p>
                </div>
            </li>
            <li id="tari-4" class="content-tari shadow-[0_4px_5px_1px_rgb(0,0,0,0.3)] bg-white px-4 py-4 rounded-xl relative sm:mb-0 min-[900px]:w-[280px] lg:w-[315px] xl:w-[410px]">
                <img class="absolute -right-8 -bottom-8" src="{{ asset('assets/img/timeline-1.png') }}" alt="">    
                
                <div class="mt-3">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Flowbite Library v1.0.0</h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                        on December 2, 2021</time>
                    <p class="md:max-w-72 text-base font-normal text-gray-500 dark:text-gray-400 lg:max-w-72 xl:max-w-80">Get started with dozens of web
                        components and interactive elements.</p>
                </div>
            </li>
        </ol>
    </div>
</div>
<div class="bg-timeline-bottom"></div>

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
                            <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/testi1.png') }}" alt="">
                        </div>
            
                        <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
            
                        <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                            <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">JOHN DOE</h3>
                            <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, SMKN 3 Jember</p>
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
                            <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/testi1.png') }}" alt="">
                        </div>
            
                        <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
            
                        <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                            <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">JOHN DOE</h3>
                            <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, SMKN 3 Jember</p>
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
                            <img class="rounded-full w-full h-full object-top object-cover" src="{{ asset('assets/img/testi1.png') }}" alt="">
                        </div>
            
                        <p class="pt-20 pb-6 min-[400px]:pb-8 min-[540px]:pt-24 min-[540px]:pb-8 md:pt-32 md:pb-16 text-center font-hind text-[8px] min-[400px]:text-xs min-[540px]:text-sm md:text-lg max-w-[230px] min-[400px]:max-w-[300px] min-[540px]:max-w-sm md:max-w-lg mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
            
                        <div class="pb-5 pl-6 md:pb-8 md:pl-10">
                            <h3 class="text-green-700 font-bold text-xs min-[540px]:text-sm md:text-xl">JOHN DOE</h3>
                            <p class="text-[10px] min-[540px]:text-xs md:text-base">Penari, SMKN 3 Jember</p>
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
@endsection