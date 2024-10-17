@extends('layouts.app')

@section('title', 'Lomba Tari - Jember Art Dance');

@section('content')

    <div class="pt-[60px] pb-72">
        <div class="hero-lomba w-screen">
            <div class="content px-4 mx-auto text-white flex flex-col md:flex-row md:justify-between relative">
                <div class="md:max-w-sm min-[840px]:max-w-lg lg:max-w-2xl">
                    <h1 class="text-4xl font-extrabold pt-20">Festival Kesenian Nusantara</h1>
                    <p class="mt-10 font-hind text-lg">Festival Kesenian diadakan untuk memperingati dan mengingatkan warga
                        kembali tentang kesenian dan budaya yang ada di Jember. Dengan diadakannya festival ini,
                        masyarakat diharapkan mampu mengembangkan dan melestarikan budaya nusantara.</p>

                    <div class="mt-10 flex gap-8 flex-wrap">
                        <div class="flex items-center gap-2 text-yellow-300">
                            <div class="text-3xl">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <p class="font-hind text-white">Baratan, Patrang</p>
                        </div>
                        <div class="flex items-center gap-2 text-yellow-300">
                            <div class="text-3xl">
                                <i class="fa-solid fa-calendar"></i>
                            </div>
                            <p class="font-hind text-white">10 November 2024</p>
                        </div>
                        <div class="flex items-center gap-2 text-yellow-300">
                            <div class="text-3xl">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p class="font-hind text-white">+62 852-3173-1224</p>
                        </div>
                    </div>

                    <div class="mt-12 md:mt-24 flex flex-wrap gap-4 items-center mb-10">
                        <div class="">
                            <p class="font-hind font-medium">Bagikan Informasi Acara ini</p>
                        </div>

                        <div class="flex gap-2">
                            <a onclick="salinLink()"
                                class="cursor-pointer bg-white w-10 h-10 text-xl flex items-center justify-center rounded-full text-black">
                                <i class="fa-solid fa-link"></i>
                            </a>
                            <a onclick="shareToWa()"
                                class="cursor-pointer bg-white w-10 text-xl h-10 flex items-center justify-center rounded-full text-black">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a onclick="shareToFb()"
                                class="cursor-pointer bg-white text-xl w-10 h-10 flex items-center justify-center rounded-full text-black">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <div
                                class="bg-white text-xl w-10 h-10 flex items-center justify-center rounded-full text-black">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center md:absolute md:-bottom-60 md:right-0 mb-10 md:mb-0">
                    <div
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
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-14 pt-14 px-4">
        <div class="content mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Acara Lainnya</h2>
            </div>

            <div class="mt-10 grid max-[440px]:grid-cols-1 grid-cols-2 gap-10 place-items-center">
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

@push('script')
    <script>
        function salinLink() {
            const link = window.location.href; // Ambil URL halaman saat ini

            navigator.clipboard.writeText(link)
                .then(() => {
                    alert("Link halaman berhasil disalin!");
                })
                .catch((error) => {
                    console.error("Gagal menyalin link:", error);
                });
        }

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
    </script>
@endpush