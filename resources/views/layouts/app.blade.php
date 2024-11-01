<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Jember Art Dance')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- css --}}
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    {{-- vendor-css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @stack('style')
</head>

<body>
    <div class="w-full">
        <div class="relative z-[100]">
            <button id="top" class="fixed opacity-0 rounded-full px-4 py-4 right-10 bottom-10 text-xl"><i class="fa-solid fa-arrow-up"></i>
            </button>
        </div>

        <nav class="fixed z-50 w-full top-0 start-0 px-4 bg-white shadow-[0_2px_8px_rgb(0,0,0,0.3)]">
            <div class="content flex flex-wrap items-center justify-between mx-auto py-4">
                <a id="logo" href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="w-24" src="{{ asset('assets/img/Logo Hitam.png') }}" alt="">
                </a>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="navbar-sticky inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white hover:text-gray-700 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-1 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-4 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li data-target="tentang"
                            class="nav-link block py-2 px-3 text-white rounded md:bg-transparent md:p-0 md:dark:text-blue-500 cursor-pointer">
                            Tentang
                        </li>
                        <li data-target="sanggar"
                            class="nav-link block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 cursor-pointer">
                            Sanggar
                        </li>
                        <li data-target="perkembangan"
                            class="nav-link block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 cursor-pointer">
                            Perkembangan
                        </li>
                        <li data-target="kesenian"
                            class="nav-link block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 cursor-pointer">
                            Kesenian
                        </li>
                        <li data-target="acara"
                            class="nav-link block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 cursor-pointer">
                            Acara
                        </li>
                        <li data-target="testimoni"
                            class="nav-link block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 cursor-pointer">
                            Testimoni
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="">
            @yield('content')
        </div>

        <div class="pt-14">
            <div class="w-full">
                <div class="bg-footer md:h-[500px] lg:h-[650px] flex items-center w-full relative px-4 pb-16 md:pb-0">
                    <div
                        class="content w-full mx-auto flex flex-col md:flex-row justify-between gap-10 items-center z-10">
                        <div class="md:max-w-xs lg:max-w-md xl:max-w-lg">
                            <div class="flex justify-start md:justify-center mb-4 min-[480px]:mb-8">
                                <img class="w-24 min-[480px]:w-32 xl:w-48"
                                    src="{{ asset('assets/img/Logo Hitam.png') }}" alt="Logo Website">
                            </div>

                            <div class="">
                                <p class="text-justify font-hind text-sm min-[480px]:text-lg md:text-base xl:text-lg">
                                    Jember Art Dance adalah portal lengkap tentang seni tari tradisional Jember. Di
                                    sini, kamu akan menemukan
                                    berbagai informasi menarik, mulai sejarah dan makna di balik setiap gerakan, hingga
                                    event dan festival tari yang
                                    siap membuat kamu terpukau. Jelajahi website kami dan mari bersama-sama
                                    melestarikan warisan budaya
                                    Jember!</p>
                            </div>

                            <div
                                class="flex flex-col lg:flex-row lg:items-center lg:justify-between mt-4 min-[480px]:mt-10">
                                <div class="">
                                    <p
                                        class="font-medium text-sm min-[480px]:text-lg md:text-base xl:text-lg font-hind">
                                        Bagikan informasi menarik Jember melalui</p>
                                </div>

                                <div
                                    class="text-black text-[25px] min-[480px]:text-[40px] md:text-[30px] xl:text-[40px] flex gap-3 min-[480px]:gap-6">
                                    <a onclick="shareToFb()" class="cursor-pointer">
                                        <i class="fa-brands fa-square-facebook"></i>
                                    </a>

                                    <a href="https://www.instagram.com/jemberartdance" target="_blank">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>

                                    <a onclick="shareToWa()" class="cursor-pointer">
                                        <i class="fa-brands fa-square-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                            class="footer md:max-w-sm lg:max-w-lg xl:max-w-xl rounded-xl md:rounded-2xl xl:rounded-3xl w-full h-[400px] min-[480px]:h-[280px] md:h-[250px] lg:h-[300px] xl:h-[330px] bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-60 border border-white flex items-center">
                            <div
                                class="footer-menu w-full py-8 px-5 md:px-4 lg:px-12 flex flex-col min-[480px]:flex-row min-[480px]:justify-between">
                                <div class="flex flex-col gap-2 min-[480px]:gap-5">
                                    <div data-footer="tentang"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        TENTANG</div>
                                    <div data-footer="sanggar"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        SANGGAR</div>
                                    <div data-footer="perkembangan"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        PERKEMBANGAN</div>
                                    <div data-footer="kesenian"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        KESENIAN</div>
                                    <div data-footer="acara"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        ACARA</div>
                                    <div data-footer="testimoni"
                                        class="footer-link text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">
                                        TESTIMONI</div>
                                </div>

                                <div
                                    class="max-[480px]:w-full max-[480px]:h-0.5 max-[480px]:bg-white max-[480px]:mt-[6px]">
                                </div>

                                <div class="flex flex-col mt-2 min-[480px]:mt-0 gap-2 min-[480px]:gap-5">
                                    <a href="/tari-lahbako"
                                        class="text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">TARI
                                        LAHBAKO</a>
                                    <a href="/tari-pandhalungan"
                                        class="text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">TARI
                                        SEMARAK <br> PANDHALUNGAN</a>
                                    <a href="/tari-padumbe"
                                        class="text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">TARI
                                        PADUMBE</a>
                                    <a href="/tari-mojosari"
                                        class="text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">TARI
                                        MOJOSARI</a>
                                    <a href="/tari-macan-kadduk"
                                        class="text-black md:text-xs lg:text-sm xl:text-lg font-bold cursor-pointer">CAN MACANAN KADDUK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/all.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        // Dapatkan URL halaman saat ini
        const currentURL = window.location.href;

        function shareToWa() {
            const waLink = `https://wa.me/?text=${encodeURIComponent(currentURL)}`;
            window.open(waLink, '_blank');
        }

        function shareToFb() {
            const fbLink = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(currentURL)}`;
            window.open(fbLink, '_blank');
        }

        $(window).on('scroll', function() {
                if ($(document).scrollTop() >= 300) {
                    $('#top').addClass('opacity-100');
                    $('#top').removeClass('opacity-0');
                } else {
                    $('#top').removeClass('opacity-100');
                    $('#top').addClass('opacity-0');
                }
            })

        document.getElementById('top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        })
    </script>
    @stack('script')
    <script>
        $(document).ready(function() {
            $(window).on('load', function() {
                $('#navbar').addClass('backdrop-blur-lg bg-white shadow-[0_2px_8px_rgb(0,0,0,0.3)]');
                $('.nav-link').css('color', '#000')
                $('#logo img').attr('src', "{{ asset('assets/img/Logo Hitam.png') }}");
                $('.navbar-sticky').removeClass('text-white');
                $('.navbar-sticky').addClass('text-black');
            })
        })

        document.querySelectorAll('.nav-link').forEach(item => {
            item.addEventListener('click', function() {
                window.location.href = '/'
            });
        });

        document.querySelectorAll('.footer-link').forEach(item => {
            item.addEventListener('click', function() {
                window.location.href = '/'
            });
        });
    </script>
</body>

</html>
