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
    <nav id="navbar" class="flex py-4 px-[100px] sticky justify-between items-center duration-500">
        <a class="" href=""><img class = "w-12" src="../assets/img/Logo.svg" alt="Logo PetLife"></a>
        <ul class="flex items-center gap-6">
            <li class="mx-2 "><a class="font-medium text-base hover:duration-500 hover:text-primary-500" href="">Home</a></li>
            <li class="mx-2 "><a class="font-medium text-base hover:duration-500 hover:text-primary-500" href="">About</a></li>
            <li class="mx-2 "><a class="font-medium text-base hover:duration-500 hover:text-primary-500" href="">Menu</a></li>
            <li class="mx-2 "><a class="font-medium text-base hover:duration-500 hover:text-primary-500" href="">Outlet</a></li>
            <li class="mx-2 "><a class="font-medium text-base hover:duration-500 hover:text-primary-500" href="">Contact</a></li>
        </ul>
        <div class="flex flex-row justify-center items-center">
            <a class="font-medium text-base w-36 h-12 bg-primary-500 rounded-md text-center py-3 text-neutral-50 hover:bg-yellow-600 hover:duration-500" href="">Order Menu</a>
        </div>
    </nav>

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
</body>
</html>