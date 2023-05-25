<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Index</title>
    @vite('resources/css/app.css')
</head>
<body class="font-work-sans">
    <!-- navbar -->
    @include('partials.navbar')

    <div class="flex flex-row items-center h-[90vh] mx-28 justify-between">
        <div class="flex flex-col">
            <h1 class="font-lora font-bold text-6xl mb-4 tracking-wider leading-tight">Where <span class="text-primary-500">Happiness</span>  and <span class="text-primary-500">Meatballs</span> Collide</h1>
            <h2 class="font-normal text-lg w-[700px] tracking-wider">Lorem ipsum dolor sit amet consectetur. Eget ac mauris morbi elementum placerat vulputate scelerisque nisi et. Duis habitant feugiat leo et cursus nulla mauris.</h2>
            <div class="flex flex-row pt-10">
            <a class="font-medium text-base  w-36 h-12 bg-primary-500 border border-primary-500 rounded-md text-center py-2 text-neutral-50 hover:bg-primary-600 hover:duration-500" href="">Order Menu</a>
            <a class="flex flex-row items-center ml-6 font-medium text-base w-fit justify-center py-2 px-5 border border-primary-500 rounded-md text-primary-500 hover:bg-primary-600 hover:duration-500" href="">
                <p class="h-8 pt-[2px] pr-2">See Menu</p> 
                <img src="../assets/icons/arrow-right.svg" alt="">
            </a>
            </div>
        </div>
        <div class="flex object-fill"><img class = "w-[700px]" src="../assets/img/bakso.svg" alt=""></div>
    </div>
    <a class="flex flex-col items-center justify-center text-primary-500" href="">
        <p class="leading-5 font-semibold text-base">Explore</p>
        <img src="../assets/icons/chevron-down.svg" alt="">
    </a>

    <!-- about us -->
    <div class="flex flex-row bg-neutral-700 bg-cover items-center justify-center my-[100px] bg-center" style="background-image: url(../assets/img/about-us-frame.svg)">
        <div>
            <img src="../assets/img/about-us-img.svg" alt="">
        </div>
        <div class="gap-y-6 py-48">
            <h3 class="text-neutral-50 font-lora text-2xl leading-8 font-semibold pb-6">About Us</h3>
            <h2 class="text-neutral-50 font-lora text-5xl font-bold tracking-tight w-[700px] pb-6">Dedicated To Delight <span class="text-primary-500">You The Best Meatball</span></h2>
            <p class="text-base font-normal text-neutral-50 w-[600px]">Lorem ipsum dolor sit amet consectetur. Cursus enim libero mattis lectus vitae convallis nunc dictum fusce. Est eleifend tristique porta magna ut augue ultricies. Arcu sit eu tellus ac elementum. Nulla dictum arcu enim viverra cursus eu parturient congue. Pharetra cursus nibh vitae maecenas iaculis nunc consectetur ultrices.</p>
        </div>
    </div>
    <!-- Best Seller -->
    <div class="flex flex-col items-center justify-center gap-6">
        <h1 class="font-lora font-semibold text-2xl text-neutral-900">Menu</h1>
        <h2 class="font-lora font-bold text-4xl ">Our <span class="text-primary-500">Best Seller</span></h2>
        <div class="flex flex-row items-center gap-6 pt-12">
            <button class="justify-center p-3 gap-2">
                <img src="..\assets\img\Button.svg" alt="">
            </button>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6 gap-4 ">
                    <div class="flex flex-col item-start gap-2">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Pentil</h1>
                        <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs</h2>
                    </div>
                    <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6 gap-4 ">
                    <div class="flex flex-col item-start gap-2">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Pentil</h1>
                        <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs</h2>
                    </div>
                    <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6 gap-4 ">
                    <div class="flex flex-col item-start gap-2">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Pentil</h1>
                        <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs</h2>
                    </div>
                    <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6 gap-4 ">
                    <div class="flex flex-col item-start gap-2">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Pentil</h1>
                        <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs</h2>
                    </div>
                    <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                </div>
            </div>
            <button class="justify-center p-3 gap-2">
                <img src="..\assets\img\Button 1.svg" alt="">
            </button>
        </div>
        <button class="flex gap-2 justify-center items-center px-5 py-2 mt-6 border border-primary-500 rounded-lg">
            <h1 class="font-work-sans font-semibold text-base text-primary-500">See More</h1>
            <img src="..\assets\img\arrow-right.svg" alt="">
        </button>
    </div>

    <!-- outlets -->
    <div class="flex flex-col bg-primary-50 bg-cover items-center justify-center my-[100px] bg-center gap-6 py-[80px]">
        <!-- <img class="z-0 object-cover" src="..\assets\icons\circles.svg" alt=""> -->
        <h1 class="font-lora font-semibold text-2xl text-neutral-900">Outlets</h1>
        <h2 class="font-lora font-bold text-4xl ">We Are <span class="text-primary-500">Everywhere</span></h2>
        <div class="flex flex-row items-center gap-6 pt-12">
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6">
                    <div class="flex flex-col item-start gap-y-6">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso President Batanghari</h1>
                        <div class="flex flex-col gap-y-4">
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\pin.svg" alt="">
                                <p class="w-[300px]">Jl. Batanghari No.5, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\phone.svg" alt="">
                                <p class="w-[300px]">0341 496 746 / 0812 5545 6020 (WA) </p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\clock.svg" alt="">
                                <p class="w-[300px]">08.00 - 21.30 WIB (Setiap Hari) </p>
                            </div>
                        </div>
                        <div class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <a class="font-medium text-base text-center text-neutral-50" href="">Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6">
                    <div class="flex flex-col item-start gap-y-6">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso President Pulosari</h1>
                        <div class="flex flex-col gap-y-4">
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\pin.svg" alt="">
                                <p class="w-[300px]">Jl. Batanghari No.5, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\phone.svg" alt="">
                                <p class="w-[300px]">0341 496 746 / 0812 5545 6020 (WA) </p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\clock.svg" alt="">
                                <p class="w-[300px]">08.00 - 21.30 WIB (Setiap Hari) </p>
                            </div>
                        </div>
                        <div class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <a class="font-medium text-base text-center text-neutral-50" href="">Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img src="..\assets\img\Rectangle 1.svg" alt="">
                <div class="flex flex-col items-start p-6">
                    <div class="flex flex-col item-start gap-y-6">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso President Malang 1</h1>
                        <div class="flex flex-col gap-y-4">
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\pin.svg" alt="">
                                <p class="w-[300px]">Jl. Batanghari No.5, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111</p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\phone.svg" alt="">
                                <p class="w-[300px]">0341 496 746 / 0812 5545 6020 (WA) </p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\clock.svg" alt="">
                                <p class="w-[300px]">08.00 - 21.30 WIB (Setiap Hari) </p>
                            </div>
                        </div>
                        <div class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <a class="font-medium text-base text-center text-neutral-50" href="">Petunjuk Arah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>