@extends('main')


@section('body')
    {{-- <h3>Hallo</h3> --}}
    <section id="section-hero">
        <div class="container-fluid container-hero d-flex justify-content-center align-items-center flex-column gap-4">
            <div class="text-center">
                {{-- <p class="fw-semibold text-white h2 title-section">Tingkatkan Performa Bisnis Anda</p> --}}
                <p class="text-white title-section">Tingkatkan Performa Bisnis Anda</p>
                <p class="fw-light text-white ">Semua solusi untuk mempermudah Training dan Upskilling karyawan di
                    perusahaan
                    Anda
                </p>
            </div>

            <button class="btn btn-kelas text-white fw-bold btn-hero" style="width: 196px">Ajukan Demo</button>
        </div>
    </section>

    <section id="section-partners">
        <div class="container-fluid mt-5" style="background-color: #F6F6F6">
            <p class="text-center h3 fw-bold title-section p-0 p-md-5 p-lg-0">Telah Dipercaya
                oleh 10.000+
                Profesional User dari</p>
            @php
                $btn_partners = ['Adirect', 'Emtek', 'IdcloudHost', 'IEG', 'IEP', 'Sctv', 'Sicepat', 'Volta'];
                $btn_partners_sm = [['IEG', 'IEP', 'Sctv', 'Emtek'], ['Adirect', 'Sicepat', 'Volta', 'IdcloudHost']];
            @endphp
            <div class="container-brand-lg d-none d-md-flex justify-content-center flex-wrap mt-4 ">
                @foreach ($btn_partners as $item)
                    <img src="/cache-img/brands/{{ $item }}.png" alt="">
                @endforeach
            </div>
            <div class="container-brand-sm mt-4 d-md-none">
                <div id="carousel-brands" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($btn_partners_sm as $key => $item)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }} ">
                                <div class="d-flex justify-content-center gap-1">
                                    @foreach ($item as $i)
                                        <img src='/cache-img/brands/{{ $i }}.png' class="m-0 p-0 w-25"
                                            alt="{{ $i }}">
                                    @endforeach
                                </div>

                            </div>
                        @endforeach
                    </div>
                    <div class="carousel-indicators carousel-indicator-brands m-0 p-0">
                        <button type="button" data-bs-target="#carousel-brands" data-bs-slide-to="0"
                            class="active bg-kelas" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-brands" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-benefit">
        <div class="container-lg p-3">
            <div class="title text-center d-flex align-items-center flex-column">
                <p class="text-dark fw-bold title-section p-0 h2">Bagaimana Kelas Center Membantu Anda?</p>
                <p class="text-dark" style="max-width: 820px">Kami menghadirkan platform pembelajaran yang komprehensif
                    untuk memberdayakan karyawan
                    Anda. Tingkatkan produktivitas dan efisiensi tim dengan Kelas Center.</p>
            </div>

            <div class="container-button mt-5 mt-lg-2 d-flex gap-3  flex-nowrap overflow-scroll">
                <a href="#lms" class="btn btn-benefit btn-kelas fw-semibold  text-white">LMS</a>
                <a href="#featured" class="btn btn-benefit fw-semibold ">Featured</a>
                <a href="#video-learning-live-webinar" class="btn btn-benefit fw-semibold">Video
                    Learning
                    + Live Webinar</a>
                <a href="#inquiry-learning" class="btn btn-benefit fw-semibold   ">Inquiry
                    Learning</a>
            </div>

            <div class="container-lg container-lms mt-5">
                <div class="row flex-row-reverse">
                    <p class="h3 text-start fw-bold title-section p-0 d-lg-none">Optimalkan potensi karyawan Anda dengan
                        Learning
                        Management System
                        (LMS)</p>
                    <div class="container-rectangle mt-2 col-lg-6">
                    </div>
                    <div class="col-lg-6 p-0">
                        <p class="h5 text-start fw-bold title-section p-0 d-none d-lg-block">Optimalkan potensi karyawan
                            Anda <br>
                            dengan Learning
                            Management System
                            (LMS)</p>
                        <p class="lms-text mt-2">Berdayakan tim Anda untuk mencapai kesuksesan dengan data
                            yang
                            akurat dan solusi
                            pembelajaran yang
                            terintegrasi. Transformasikan pengelolaan sumber daya manusia Anda dan hadirkan
                            produktivitas
                            yang
                            unggul dengan LMS kami!</p>



                        <div class="container-lms-benefits">

                            <div class="accordion" id="lms-benefits">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#issued-certificate" aria-expanded="true"
                                            aria-controls="issued-certificate">
                                            <div class="title d-flex gap-3 align-items-center">
                                                <img class="check-icon-benefit" src="/cache-img/benefit/check_small.png"
                                                    alt="">
                                                <p class="fw-bold text-dark p-0 m-0">Issued Certificate</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="issued-certificate" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <span class="lms-text">Berikan kemudahan dalam mengatur dan mendistribusikan
                                                sertifikat
                                                kepada setiap
                                                karyawan.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#on-boarding" aria-expanded="true" aria-controls="on-boarding">
                                            <div class="title d-flex gap-3 align-items-center">
                                                <img class="check-icon-benefit" src="/cache-img/benefit/check_small.png"
                                                    alt="">
                                                <p class="fw-bold text-dark p-0 m-0">On Boarding</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="on-boarding" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <span class="lms-text">Memastikan setiap karyawan siap memberikan kontribusi
                                                maksimal
                                                sejak hari pertama
                                                mereka bergabung</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#training-on-demand" aria-expanded="true"
                                            aria-controls="training-on-demand">
                                            <div class="title d-flex gap-3 align-items-center">
                                                <img class="check-icon-benefit" src="/cache-img/benefit/check_small.png"
                                                    alt="">
                                                <p class="fw-bold text-dark p-0 m-0">Training on-demand</p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="training-on-demand" class="accordion-collapse collapse show ">
                                        <div class="accordion-body">
                                            <span class="lms-text">Training On-Demand yang berfokus pada pengalaman
                                                pengguna,
                                                pelatihan berkualitas
                                                tinggi menjadi lebih mudah diakses dan disesuaikan dengan kebutuhan
                                                Anda.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-2" id="section-pilihan-paket">
        <div class="container-xl p-3">
            <p class="h2 text-center fw-bold title-section p-0">Pilihan Paket Untuk Perusahaan di Kelas Center</p>
            <div class="container-lg p-0 lg-p-4 d-flex no-wrap overflow-x-scroll gap-4 container-options">
                @foreach ($pakets as $paket)
                    <div class="card rounded-4 card-options"
                        @if ($paket->title === 'Pro') style="background-color: #E0EFF5" @endif>
                        <div class="title w-100 d-flex h3 align-items-center gap-3 mt-3">
                            <img src="/cache-img/pakets/{{ $paket->icon }}" class="ms-3" width="50px"
                                height="50px" alt="">
                            <p class="fw-bold title-paket p-0 m-0">{{ $paket->title }}</p>
                        </div>

                        <span class="fw-light ms-3 kelebihan">Kelebihan</span>
                        <ul class="p-0 m-0 mt-2">
                            @foreach ($paket->content as $item)
                                <li class="d-flex align-items-center gap-3 mt-2">
                                    <img src="/cache-img/pakets/check.png" class="ms-3" alt="">
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <img src="/cache-img/pakets/divider.png" class="p-4" alt="divider">
                        <div class="container-price ms-3">
                            <p class="price-regular p-0 m-0"><del>Rp{{ number_format($paket->reguler, 0, ',', '.') }}</del>
                            </p>
                            <p class="price-discount p-0 mt-2"><span
                                    class="h4 fw-bold">Rp{{ number_format($paket->discount, 0, ',', '.') }}</span><span
                                    class="fw-normal">/bulan</span>
                            </p>

                        </div>
                        <div class="d-flex justify-content-center">
                            <button
                                class="btn btn-paket h4 text-dark fw-semibold @if ($paket->title === 'Pro') text-white @endif"
                                @if ($paket->title === 'Pro') style="background-color: #2D6075;" @endif>Pilih
                                Paket</button>
                        </div>
                    </div>
                @endforeach
            </div>
            <div
                class="container-xl container-enterprise d-flex align-items-center justify-content-between flex-column flex-md-row rounded-bottom-4 border-dark enterprise mt-3">
                <div
                    class="content text-white d-flex gap-2 gap-md-4 flex-column align-items-md-center align-items-start flex-md-row  mt-2">
                    <div class="header h2 d-flex gap-3 align-items-center ms-0 ms-sm-1 mt-3 mt-md-0">
                        <img src="/cache-img/pakets/enterprise.png" style="width: 40px; height: 40px;" alt="enterprise">
                        <p class="text-white fw-bold p-0 m-0">Enterprise</p>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="/cache-img/pakets/vector.png" width="24px" height="24px" alt="vector">
                        <span class="fw-light text-white">>100 users</span>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="/cache-img/pakets/vector.png" width="24px" height="24px" alt="vector">
                        <span class="fw-light text-white">All Access Class</span>
                    </div>
                    <div class="d-flex gap-2">
                        <img src="/cache-img/pakets/vector.png" width="24px" height="24px" alt="vector">
                        <span class="fw-light text-white">More Features</span>
                    </div>
                </div>
                <button class="btn btn-contact-us fw-bold mt-3 mt-lg-0 mb-3 mb-lg-0">Contact Us</button>
            </div>
        </div>
    </section>

    <section id="section-kelas">
        <div class="container-lg pb-3 pb-sm-5">
            <p class="text-center h3 fw-bold title-section p-0">Lebih dari 2000+ Learning Video</p>
            <p class="text-center lms-text mx-auto" style="max-width: 820px">Kami juga sudah menyediakan
                banyak pelatihan
                yang beragam, pelatihan
                disusun
                dan dibuat
                oleh tim kurikulum
                profesional bersama tim video profesional untuk menghasilkan video dengan kualitas tinggi</p>
            <div
                class="container-button-kelas mt-5 mt-lg-2 d-flex gap-3 flex-nowrap overflow-scroll justify-content-start justify-content-sm-center ms-3 ms-md-0">
                <a href="/kelas.com" class="btn btn-benefit btn-kelas fw-semibold  text-white">Kelas.com</a>
                <a href="/kelas.work" class="btn btn-benefit fw-semibold ">Kelas.work</a>
                <a href="/bootcamp" class="btn btn-benefit fw-semibold ">Bootcamp</a>
            </div>
            <div class="container-class d-flex gap-2 flex-column mt-5 justify-content-center align-items-center p-0">
                <div id="carousel-class" class="carousel slide">
                    <div class="carousel-inner container-fluid justify-content-center pt-3 pb-3">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="carousel-item p-0 container-fluid {{ $j === 0 ? 'active' : '' }}">
                                {{-- <div class="d-flex container-fluid gap-3 flex-wrap justify-content-center"> --}}
                                <div class="row justify-content-center">
                                    @for ($i = 0; $i < 4; $i++)
                                        <div
                                            @if ($i % 2 === 0) class="col-6 col-lg-3 mb-3 d-flex justify-content-center justify-content-sm-end"
                                        @else
                                        class="col-6 col-lg-3 mb-3 d-flex justify-content-center justify-content-sm-start" @endif>
                                            <div class="card card-class p-0 shadow">
                                                <div class="position-relative card-img-top card-class-img"
                                                    style="background-image: url('/cache-img/class/class-1.png'); background-position: center; background-size: cover;">
                                                    <img src="/cache-img/class/play.png"
                                                        class="position-absolute top-50 start-50 translate-middle"
                                                        alt="play">
                                                </div>
                                                <div
                                                    class="card-body p-1 ms-1 ms-sm-2 d-flex flex-column justify-content-between pb-2 pb-sm-4">
                                                    <p class="card-title fw-bold card-class-title mt-1 mt-sm-3">Public
                                                        Speaking :
                                                        Merdeka
                                                        Dalam
                                                        Bicara
                                                    </p>
                                                    <div class="card-text">
                                                        <p class="p-0 m-0 mentor-name fw-semibold">Pandji Pragiwaksono</p>
                                                        <p class="p-0 m-0 mentor-profesi">Presenter Televisi & Komika</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor

                    </div>



                </div>
                <div class="container-wrapper-carousel-class position-relative col-lg-12 d-none col-6 d-lg-flex p-0 ">
                    <div
                        class="carousel-indicators carousel-indicator-class position-absolute top-50 start-0 translate-middle-y p-0 m-0 ms-3 ms-lg-0">
                        @for ($x = 0; $x < 4; $x++)
                            <button type="button" data-bs-target="#carousel-class"
                                data-bs-slide-to="{{ $x }}"
                                @if ($x === 0) class="active btn-indicator-class" aria-current="true" @else class="btn-indicator-class" @endif
                                aria-label="Slide {{ $x + 1 }}"></button>
                        @endfor
                    </div>
                    <div class="carousel-class-button position-absolute top-50 d-none d-md-block end-2 translate-middle-y">
                        <a href="#" class="arrow-class-carousel" type="button" data-bs-target="#carousel-class"
                            data-bs-slide="prev" onclick="changeColorIndicator('prev')">
                            <svg width="34" height="24" viewBox="0 0 34 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 23.6666L14.375 21.3333L6.70835 13.6666H33.6667V10.3333H6.70835L14.3334 2.66659L12 0.333252L0.333355 11.9999L12 23.6666Z"
                                    fill="#E5E5E5" />
                            </svg>

                        </a>
                        <a href="#" class="arrow-class-carousel" type="button" data-bs-target="#carousel-class"
                            data-bs-slide="next" onclick="changeColorIndicator('next')">
                            <svg width="34" height="24" viewBox="0 0 34 24" style="transform: rotate(180deg)"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 23.6666L14.375 21.3333L6.70835 13.6666H33.6667V10.3333H6.70835L14.3334 2.66659L12 0.333252L0.333355 11.9999L12 23.6666Z"
                                    fill="#E5E5E5" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-cta">
        <div class="container-fluid container-cta d-flex justify-content-center align-items-center flex-column">
            <p class="text-center h3 fw-bold title-section p-0 mt-1">Tingkatkan Kualitas Perusahaan Anda</p>
            <p class="lms-text text-center">Kami ingin membantu dan menunjukkan kepada Anda bagaimana Kelas corp dapat
                membantu dalam
                mengelola <br class="d-none d-md-block"> pelatihan
                dan membuat prosesnya lebih cepat dan lebih mudah.</p>
            <div class="p-3 w-100 d-flex justify-content-center">
                <button class="btn btn-kelas btn-cta fw-semibold text-white ">Ajukan Demo</button>
            </div>
        </div>
    </section>
@endsection
