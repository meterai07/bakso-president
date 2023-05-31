<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakso President | @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body class="font-work-sans bg-neutral-50">
    @include('partials.navbar')
        @yield('content')
    @include('partials.footer')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        let swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 4,
            slidesPerColumn: 2,


        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
            hiddenClass: ".swiper-button-hidden",
        },
        });

        let swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            slidesPerColumn: 1,


        navigation: {
            nextEl: ".button-next2",
            prevEl: ".button-prev2",
            hiddenClass: ".swiper-button-hidden2",
        },
        });
    </script>

    <!-- Navigation Bar -->
    <script>
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
            document.getElementById("navbar").style.backgroundColor = "#FAFAFA";
            document.getElementById("navbar").style.zIndex = 100;
        } else {
            document.getElementById("navbar").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
    }
    </script>

    {{-- Testimonial --}}
    <script>
    let c = 1;

    function opacityNext() {
        document.getElementById("ts-sw-" + c).style.opacity = 0.8;
        c = c + 1;
        if (c== 6) c = 0;
        document.getElementById("ts-sw-" + c).style.opacity = 1;
    }

    function opacityPrev() {
        document.getElementById("ts-sw-" + c).style.opacity = 0.8;
        c = c - 1;
        if (c== -1) c = 5;
        document.getElementById("ts-sw-" + c).style.opacity = 1;
    }

    function explore() {
        var myElement = document.getElementById('explore');
        var topPos = myElement.offsetTop;
        document.getElementById('about-us').scrollTop = topPos;
    }

    </script>
</body>
</html>
