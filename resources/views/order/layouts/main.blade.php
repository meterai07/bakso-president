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
    @include('order.components.navbar')
        @yield('order')
    @include('order.components.footer')

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
</body>
</html>
