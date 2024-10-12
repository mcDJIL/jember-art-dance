@extends('layouts.app')

@section('title', 'Tari Lahbako')

@section('content')

    <div class="pt-40 pb-28 px-4">
        <div class="content mx-auto">
            <div class="relative tari-lahbako rounded-xl md:rounded-3xl px-4 py-4 md:px-8 md:py-12 flex justify-between items-center gap-4 md:gap-10">
                <div class="absolute rounded-xl md:rounded-3xl z-10 top-0 right-0 left-0 bottom-0 overlay-detail"></div>

                <div class="max-w-3xl z-20">
                    <div class="text-white">
                        <h1 class="font-extrabold text-sm md:text-lg lg:text-3xl">PESONA TARI LAHBAKO,</h1>
                        <h1 class="font-extrabold text-sm md:text-lg lg:text-3xl">WARISAN BUDAYA NUSANTARA</h1>
                    </div>

                    <div class="mt-4 md:mt-6 lg:mt-10 text-white">
                        <p class="text-justify font-hind text-[10px] md:text-base lg:text-xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    </div>
                </div>

                <div class="z-20">
                    <iframe class="rounded-xl md:rounded-2xl lg:rounded-3xl w-[230px] h-[132px] md:w-[350px] md:h-[197px] lg:w-[450px] lg:h-[253px]" src="https://www.youtube.com/embed/KjePbhd7nto?si=CSQRNkskI-_xSyWO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection