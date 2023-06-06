@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <!-- Hero -->
    <div id="home" class="absolute items-start justify-start -z-10 opacity-10">
        <img class="" src="../assets/img/header-bg.svg" alt="">
    </div>
    <div class="flex flex-row items-center h-[90vh] mx-28 justify-between">
        <div class="flex flex-col">
            <h1 class="font-lora font-bold text-6xl mb-4 tracking-wider leading-tight">Where <span class="text-primary-500">Happiness</span>  and <span class="text-primary-500">Meatballs</span> Collide</h1>
            <h2 class="font-normal text-lg w-[700px] tracking-wider">"Bakso President, kenikmatan daging sapi yang lezat dan kuah kaldunya yang kaya akan rasa."</h2>
            <div class="flex flex-row pt-10">
            <a class="font-medium text-base  w-36 h-12 bg-primary-500 border border-primary-500 rounded-md text-center py-2 text-neutral-50 hover:bg-primary-600 hover:duration-500" href="/order">Order Menu</a>
            <a class="flex flex-row items-center ml-6 font-medium text-base w-fit justify-center py-2 px-5 border border-primary-500 rounded-md text-primary-500 hover:bg-primary-600 hover:duration-500" href="#menus">
                <p class="h-8 pt-[2px] pr-2">See Menu</p>
                <img src="../assets/icons/arrow-right.svg" alt="">
            </a>
            </div>
        </div>
        <div class="flex object-fill"><img class = "w-[700px]" src="../assets/img/bakso.svg" alt=""></div>
    </div>
    <a onclick="explore()" class="flex flex-col items-center text-primary-500">
        <p class="leading-5 font-semibold text-base">Explore</p>
        <img src="../assets/icons/chevron-down.svg" alt="">
    </a>

    <!-- about us -->
    <div id="about" class="flex flex-row bg-neutral-700 bg-cover items-center justify-center my-[100px] bg-center gap-20 py-24" style="background-image: url(../assets/img/about-us-frame.svg)">
        <div>
            <img src="../assets/img/about-us-img.svg" alt="">
        </div>
        <div class="flex flex-col gap-y-6">
            <h3 class="text-neutral-50 font-lora text-2xl leading-8 font-semibold">About Us</h3>
            <h2 class="text-neutral-50 font-lora text-5xl font-bold tracking-tight w-[700px]">Dedicated To Delight <span class="text-primary-500">You The Best Meatball</span></h2>
            <p class="text-base font-normal text-neutral-50 w-[600px]">Bakso President didirikan oleh H. Abdul Ghani Sugito, yang biasa dipanggil Abah Sugito, pada tahun 1977. “Awalnya Abah ikut jualan baksonya orang. Wong nggak punya modal sama sekali dan memang saat itu beliau nggak punya keahlian apa-apa. Jadi bisanya ya itu saja dijalani buat bertahan hidup,” sebut Dani, panggilan akrab Ali Wahdani, Manajer Operasional Bakso President.  Sekitar lima tahun berjualan di sekitar Kota Malang, Abah lalu mengumpulkan modal dan mencoba jualan sendiri. Pada 1982, dia membuka warung tenda di belakang Bioskop President, Malang. Dari nama bioskop ini akhirnya muncul nama Bakso President. Lokasi itulah yang sampai sekarang jadi lokasi utama jualan Bakso President.</p>
            <div class="flex flex-row pt-6">
                <div class="flex flex-col justify-center items-center w-[200px] gap-2">
                    <h1 class="font-lora font-bold text-5xl text-primary-500">40+</h1>
                    <p class="font-normal text-base text-neutral-50">Years of Experience</p>
                </div>
                <img src="../assets/icons/line.svg" alt="">
                <div class="flex flex-col justify-center items-center w-[200px] gap-2">
                    <h1 class="font-lora font-bold text-5xl text-primary-500">4.0+</h1>
                    <p class="font-normal text-base text-neutral-50">Good Reviews</p>
                </div>
                <img src="../assets/icons/line.svg" alt="">
                <div class="flex flex-col justify-center items-center w-[200px] gap-2">
                    <h1 class="font-lora font-bold text-5xl text-primary-500">20.000+</h1>
                    <p class="font-normal text-base text-neutral-50">Happy Customers</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Seller -->
    <div id="menus" class="flex flex-col items-center justify-center gap-6">
        <h1 class="font-lora font-semibold text-2xl text-neutral-900">Menu</h1>
        <h2 class="font-lora font-bold text-4xl ">Our <span class="text-primary-500">Best Seller</span></h2>
        <div class="flex flex-row pt-4 justify-center items-center ">
            <img class="button-prev px-6 pb-2 h-max bg-cover" src="../assets/img/prev-button.svg" alt="">
            <div class="flex flex-row swiper mySwiper w-[1400px]">
                <div class="swiper-wrapper pb-10">
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Iga</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">5 pcs Bakso Besar dan Iga Sapi</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 30.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol1.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Mie</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs dan Mie</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol2.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Bihun</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs dan Bihun</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol3.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Kecil Telur Puyuh</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil Telur Puyuh 5 pcs</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 15.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol4.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Super Pedas</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs Super Pedas</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol5.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Saos</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Kecil 5 pcs dan Saos Pedas</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 10.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol6.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Goreng</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Goreng 8 pcs</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 8.000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col bg-neutral-50 shadow-md rounded-2xl">
                            <img class="h-72 object-cover rounded-t-2xl" src="..\assets\img\pentol\pentol7.jpeg" alt="">
                            <div class="flex flex-col items-start p-6 gap-4 ">
                                <div class="flex flex-col item-start gap-2">
                                    <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso Tetelan</h1>
                                    <h2 class="font-work-sans font-normal text-xs text-neutral-600">Bakso Isi Tetelan</h2>
                                </div>
                                <h1 class="font-work-sans font-semibold text-lg text-primary-500">Rp 25.000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="button-next px-6 h-max pb-2 bg-cover" src="../assets/img/next-button.svg" alt="">
        </div>
        <a href="/order">
            <button class="flex gap-2 justify-center items-center px-5 py-2 border border-primary-500 rounded-lg">
                <h1 class="font-work-sans font-semibold text-base text-primary-500">See More</h1>
                <img src="..\assets\img\arrow-right.svg" alt="">
            </button>
        </a>
    </div>

    <!-- outlets -->
    <div class="flex flex-col bg-cover items-center justify-center my-[100px] bg-center gap-6 py-[80px]" style="background-image: url(../assets/img/outlets-bg.svg)">
        <h1 id="outlets" class="font-lora font-semibold text-2xl text-neutral-900">Outlets</h1>
        <h2 class="font-lora font-bold text-4xl ">We Are <span class="text-primary-500">Everywhere</span></h2>
        <div class="flex flex-row items-center gap-6 pt-12">
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img class="max-h-56 object-cover rounded-t-2xl" src="..\assets\img\bakso1.jpg" alt="">
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
                        <a href="https://goo.gl/maps/HtPMfSG5G1UL1Lc29" target="_blank" class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <p class="font-medium text-base text-center text-neutral-50">Petunjuk Arah</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img class="max-h-56 object-cover rounded-t-2xl" src="..\assets\img\bakso2.jpg" alt="">
                <div class="flex flex-col items-start p-6">
                    <div class="flex flex-col item-start gap-y-6">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso President Malang</h1>
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
                        <a href="https://goo.gl/maps/QFPPBz2Bk7PKuy317" target="_blank" class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <p class="font-medium text-base text-center text-neutral-50">Petunjuk Arah</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col bg-neutral-50 shadow-xl rounded-2xl">
                <img class="max-h-56 object-cover rounded-t-2xl" src="..\assets\img\bakso3.jpg" alt="">
                <div class="flex flex-col items-start p-6">
                    <div class="flex flex-col item-start gap-y-6">
                        <h1 class="font-lora font-semibold text-xl text-neutral-900">Bakso President Malang 1</h1>
                        <div class="flex flex-col gap-y-4">
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\pin.svg" alt="">
                                <p class="w-[300px]">Jl. Sunandar Priyo Sudarmo, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65122</p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\phone.svg" alt="">
                                <p class="w-[300px]">0341 496 746 / 08990304958 (WA) </p>
                            </div>
                            <div class="flex flex-row font-normal text-base text-neutral-600 gap-3 items-start justify-start">
                                <img class="pt-[1px] w-5" src="..\assets\icons\clock.svg" alt="">
                                <p class="w-[300px]">08.00 - 21.30 WIB (Setiap Hari) </p>
                            </div>
                        </div>
                        <a href="https://goo.gl/maps/gMDqYxGCVdgCB31h9" target="_blank" class="flex flex-row w-[180px] items-center justify-center bg-contain bg-primary-500 border border-primary-500 rounded-lg py-2 gap-2 hover:bg-primary-600 hover:duration-500">
                            <img src="..\assets\icons\way.svg" alt="">
                            <p class="font-medium text-base text-center text-neutral-50">Petunjuk Arah</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div id="testimonial" class="flex items-center justify-center p-10">
        <div class="flex flex-col items-center justify-center w-[1223px] gap-6 py-12 rounded-[48px]" style="background-image: url(../assets/img/testimoni-bg.svg)">
            <h1 class="font-lora font-semibold text-2xl text-neutral-900">Testimonial</h1>
            <h2 class="font-lora font-bold text-4xl ">What They Say About <span class="text-neutral-50">Our Recipes</span></h2>
            <div class="flex flex-row pt-4 justify-center items-center ">
                <img onclick="opacityPrev()" class="button-prev2 h-max px-4 bg-cover" src="../assets/icons/back-button-testimoni.svg" alt="">
                <div class="flex flex-row swiper mySwiper2 w-[1000px]">
                    <div class="swiper-wrapper">
                        <div id="ts-sw-0" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl w-[305px] opacity-80 duration-500">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Yogi Puji Sastomo</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-sw-1" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl w-[500px  duration-500]">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Anda Bugis</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-sw-2" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl opacity-80  duration-500" style="width: 1000px !important;">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Galih Wicaksana</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-sw-3" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl w-[305px] opacity-80  duration-500">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Canino ALby Darmawan</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-sw-4" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl w-[305px] opacity-80  duration-500">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Tengku Muhammad Rafi</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ts-sw-5" class="swiper-slide flex flex-col bg-neutral-50 rounded-2xl w-[305px] opacity-80 duration-500">
                            <div class="flex flex-col items-start p-4 gap-2">
                                <div class="flex flex-col item-start gap-3">
                                    <h1 class="font-normal text-xs text-neutral-900">Lorem ipsum dolor sit amet consectetur. Lectus metus suspendisse purus pretium. Dui egestas ut non ac sed vitae. Mauris ipsum ut sit gravida magna. Eleifend nibh scelerisque fringilla non tincidunt. </h1>
                                    <div class="flex flex-row gap-2">
                                        <img class="flex w-[40px]" src="..\assets\img\person.svg" alt="">
                                        <div class="flex flex-col gap-[1px] py-[3px]">
                                            <h1 class="font-lora font-semibold text-neutral-900 text-sm">Anda Bagong</h1>
                                            <h2 class="font-normal text-[10px] text-neutral-900">Selebgram</h2>
                                            <div class="flex flex-row gap-[2px] pt-[2px]">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\filled-star.svg" alt="">
                                                <img class="w-3" src="..\assets\icons\star.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img onclick="opacityNext()" class="button-next2 px-4 h-max bg-cover" src="../assets/icons/next-button-testimoni.svg" alt="">
            </div>
        </div>
    </div>
@endsection
