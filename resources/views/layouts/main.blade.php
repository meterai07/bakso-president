<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman @yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body class="font-work-sans">
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
            slidesPerGroup: 3,
            slidesPerColumn: 2,
            

        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
            hiddenClass: ".swiper-button-hidden",
        },
        });
    </script>
</body>
</html>