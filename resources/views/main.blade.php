<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: 'Gotham';
            src: url('/assets/fonts/Gotham-Book.otf') format('opentype');
            font-style: normal;
        }

        @font-face {
            font-family: 'GothamBold';
            src: url('/assets/fonts/Gotham-Bold') format('opentype');
            font-weight: bold;
            font-style: normal;
        }

        :root {
            --kelas: #C19D6C;
        }

        body {
            font-family: 'Gotham', sans-serif;
        }

        #section-hero {
            padding-top: 5rem;
        }

        .title-link {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            line-height: 21px !important;
        }

        .btn-navbar-text {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            line-height: 24px !important;
            letter-spacing: -2.1% !important;
        }



        .card-class:hover {
            transition: 0.6s ease-in-out;
            transform: scale(1.01);
            cursor: pointer;
        }

        .title-section {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 32px !important;
            font-weight: 700 !important;
            line-height: 48px !important;
            letter-spacing: -2.2% !important;
        }

        .title-paket {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 24px !important;
            font-weight: 700 !important;
            line-height: 24.4px !important;
            letter-spacing: -2.1% !important;
        }

        #section-benefit {
            padding-top: 7rem !important;
        }

        #section-pilihan-paket {
            padding-top: 6rem !important;
        }

        #section-kelas {
            padding-top: 6rem !important;
        }

        .btn-benefit {
            white-space: nowrap;
            display: inline-block;
            border: 2px solid #C19D6C;
            color: #C19D6C;
        }

        .arrow-class-carousel:hover svg path {
            fill: var(--kelas);
        }

        .active-arrow svg path {
            fill: var(--kelas)
        }

        .carousel-indicator-class {
            position: unset !important;
        }

        .lms-text {
            width: 95%;
        }

        .container-lms-benefits {
            width: 80%;
        }

        .btn-benefit:hover {
            color: #8b6d42;
            border: 2px solid #8b6d42;
        }

        .container-button::-webkit-scrollbar,
        .container-options::-webkit-scrollbar,
        .container-button-kelas::-webkit-scrollbar {
            display: none;
        }

        .container-button,
        .container-button-kelas {
            -ms-overflow-style: none;
            scrollbar-width: none;
            justify-content: center;
        }

        .navbar-active {
            color: var(--kelas);
        }

        .text-kelas {
            color: var(--kelas)
        }

        .btn-kelas {
            background-color: var(--kelas);
            width: 135px;
        }

        .nav-link:hover {
            color: var(--kelas)
        }

        .bg-kelas {
            background-color: var(--kelas);

        }

        .container-wrapper-carousel-class {
            max-width: 1164px;
            /* width: 100%; */
            margin: 0 auto;
            /* Center the container */
        }



        .accordion-button:focus {
            box-shadow: none;
        }

        .carousel-indicators.carousel-indicator-class [data-bs-target] {
            width: 24px;
            height: 5px;
            border-radius: 8px;
            background-color: #D9D9D9;

        }

        .carousel-indicators-container {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .carousel-class-button {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            display: flex;
            gap: 10px;
        }

        .carousel-indicator-brands .active {
            background-color: var(--kelas) !important;
        }

        .carousel-indicator-class .active {
            /* background-color: var(--kelas) !important; */
            width: 40px !important;
            height: 5px !important;
            border-radius: 5px !important;
            background-color: #66523B !important;
        }

        .btn-kelas:hover {
            background-color: #8b6d42
        }

        .btn-outline-kelas {
            border: 2px solid #C19D6C;
            color: #C19D6C;
            width: 135px;
        }

        .btn-contact-us {
            background-color: #ffff;
            color: var(--kelas);
            min-width: 135px;
            height: 48px;
        }

        .btn-contact-us:hover {
            background-color: var(--kelas) !important;
            border: 2px solid #ffff;

        }

        .btn-paket {
            background-color: #87BBD1;
            width: 90%;
            height: 40px;
        }

        .btn-paket:hover {
            background-color: #2D6075;
        }

        .btn-outline-kelas:hover {
            color: #8b6d42;
            border: 2px solid #8b6d42;
        }


        .kelebihan {
            font-size: 20px;
            color: #8A8A8A !important;
        }

        .container-hero {
            background-image: url('cache-img/hero/hero-lg.png');
            background-repeat: no-repeat;
            background-position: center;
            height: 397px;
        }

        .carousel-indicator-brands [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 3px;
        }

        .carousel-indicators {
            position: relative;
            top: 0px;
        }

        .accordion-button::after {
            background-image: initial;
        }

        .accordion-button:not(.collapsed)::after {
            background-image: initial;
        }

        .accordion-button {
            background-color: white;
        }

        .accordion-button:not(.collapsed) {
            background-color: #F6F6F6;
        }

        .container-rectangle {
            background-color: #D9D9D9;
            height: 400px;
            height: 560px;
        }

        .container-options {
            margin-top: 3rem;
            justify-content: center;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .card-options {
            width: 366.67px;
            height: 625px
        }



        .enterprise {
            /* width: max-content; */
            height: 96px;
            background-color: var(--kelas)
        }

        .container-rectangle {

            height: 400px;
        }



        #section-cta {
            background-image: url('cache-img/cta/cta.png');
            background-repeat: no-repeat;
            background-position: center;
            margin-top: 2rem;
        }

        .container-cta {
            background-color: rgba(238, 229, 216, 0.95);
            height: 304px;
        }

        .card-class {
            width: 273px;
            height: 323px;
        }

        .card-class-title {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 18px;
            line-height: 20px;
            font-weight: 700 !important;
        }

        .card-class-img {
            height: 172px;
        }

        .mentor-name {
            font-size: 16px;
        }

        .mentor-profesi {
            font-size: 14px;
        }

        .footer-text {
            font-size: 14px;
        }

        .btn-cta {
            width: 137px !important;
            height: 48px !important;
        }

        .footer-bold-text {
            font-family: 'GothamBold', arial, sans-serif !important;
            font-size: 20px !important;
            font-weight: 700 !important;
            line-height: 29.4px !important;
            letter-spacing: -0.3% !important;
        }


        @media only screen and (min-width:1200px) {
            .container-enterprise {
                max-width: 1150px !important;
                width: 100%;
            }
        }

        @media only screen and (max-width:992px) {
            #section-pilihan-paket {
                padding-top: 5rem !important;
            }

            .lms-text {
                width: 100%;
            }

            .container-lms-benefits {
                width: 100%;
            }

            #section-benefit {
                padding-top: 3.6rem;
            }

            .card-options {
                min-width: 290px;
                height: 604px
            }

            .container-options {
                justify-content: start;
            }




        }

        @media only screen and (max-width:768px) {
            .title-section {
                line-height: 34.4px !important;
            }

            .fw-light {
                font-weight: 400 !important;
                font-size: 16px !important;
                max-width: 550px !important;
            }

            .btn-contact-us {
                background-color: #ffff;
                color: var(--kelas);
                min-width: 135px;
                max-height: 40px;
            }

            .container-enterprise {
                align-items: unset !important;
            }

            .enterprise {
                height: 232px;
                /* width: 328px; */
                background-color: var(--kelas)
            }

        }


        @media only screen and (max-width: 610px) {

            .card-class {
                max-width: 273px;
                height: 323px;
            }


        }

        @media only screen and (max-width:576px) {
            #section-benefit {
                padding-top: 3rem !important;
            }

            .title-section {
                font-family: 'GothamBold', arial, sans-serif !important;
                font-size: 22px !important;
                font-weight: 700 !important;
                line-height: 29.4px !important;
                /* line-height: 15.6px !important; */
                /* 15.6 membuat terlalu mepet */
                letter-spacing: -0.3% !important;
            }

            .fw-light {
                font-weight: 400 !important;
                font-size: 16px !important;
                max-width: 450px !important;
            }

            footer .fw-light {
                font-weight: 100 !important;
                font-size: 14px !important;
            }

            .card-class {
                max-width: 273px;
                height: 203px;
            }

            #section-cta {
                margin-top: 0;
            }



            .card-class-img {
                height: 83px;
            }



            .container-button {
                justify-content: start !important;
            }

            .kelebihan {
                font-size: 16px;
            }

            .card-class-title {
                font-size: 16px;
                line-height: 18px;
            }

            .container-hero {
                background-image: url('cache-img/hero/hero-sm.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                height: 397px;
            }

            .container-rectangle {

                height: 121px;
            }

            .btn-hero {
                width: 85vw !important;
                height: 40px !important;
            }

            .lms-text {
                font-size: 14px;
                line-height: 15.6px;
                letter-spacing: -0.3%;
                font-weight: 400;
            }

            #section-cta {
                background-image: url('cache-img/cta/cta-sm.png');
                /* background-repeat: no-repeat;
                background-position: center; */
            }

            .container-cta {
                background-color: rgba(238, 229, 216, 0.95);
                height: 252px;
            }

            .btn-cta {
                width: 100% !important;
                height: 40px !important;
            }

            .mentor-name {
                font-size: 14px;
            }

            .mentor-profesi {
                font-size: 12px;
            }

        }

        @media only screen and (max-width:414px) {
            .mentor-name {
                font-size: 12px;
            }

            .mentor-profesi {
                font-size: 10px;
            }
        }
    </style>
</head>


<body>
    <header>
        @include('navbar')
    </header>
    <div class="container-fluid p-0 " style="min-height: 100vh">
        @yield('body')

        @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.querySelectorAll('.nav-link').forEach(function(el) {
            el.addEventListener('click', function() {
                document.querySelectorAll('.nav-link').forEach(function(nav) {
                    nav.classList.remove('navbar-active')
                })
                el.classList.add('navbar-active')
            })
        })

        document.querySelectorAll('.arrow-class-carousel').forEach(function(el) {
            el.addEventListener('click', function() {
                document.querySelectorAll('.arrow-class-carousel').forEach(function(prev) {
                    prev.classList.remove('active-arrow')
                    prev.querySelector('svg path').classList.remove('active-arrow');
                })

                el.classList.add('active-arrow')
                el.querySelector('svg path').classList.add('active-arrow');
            })
        })

        document.querySelectorAll('.btn-indicator-class').forEach(function(el) {
            el.addEventListener('click', function() {
                document.querySelectorAll('.btn-indicator-class').forEach(function(n) {
                    n.classList.remove('active');
                })
                el.classList.add('active')
            })
        })
        // Is value plus or minus
        function changeColorIndicator(nav) {
            const active = document.querySelectorAll('.btn-indicator-class.active');

            let value = active.length > 0 ? parseInt(active[0].dataset.bsSlideTo) : null;
            nav === 'next' ? ++value : --value;

            value = value < 0 ? 3 : (value > 3 ? value = 0 : value)

            document.querySelectorAll('.btn-indicator-class').forEach(function(el) {
                if (parseInt(el.dataset.bsSlideTo) === value) {
                    el.classList.add('active')
                } else {
                    el.classList.remove('active')
                }
            })
        }

        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.querySelector('#carousel-class');
            if (carousel) {
                new bootstrap.Carousel(carousel);
            }
        });
    </script>
</body>



</html>
