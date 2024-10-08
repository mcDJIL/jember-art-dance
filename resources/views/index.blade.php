@extends('layouts.home')

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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi pariatur? Tempore, non qui.
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi pariatur? Tempore, non qui.
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi pariatur? Tempore, non qui.
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda fuga sunt deserunt magnam quibusdam optio quia vel nisi accusantium modi aliquam consequuntur tenetur ratione excepturi pariatur? Tempore, non qui.
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
@endsection