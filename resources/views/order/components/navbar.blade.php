<nav id="navbar" class="w-full py-4 px-[100px] flex items-center justify-between duration-500 bg-neutral-50 fixed top-0 z-50">
    <a href="/"><img src="../assets/icons/Logo-Bakso.png" alt="Logo" class="h-12 w-auto"></a>
    <div class="flex items-center gap-8">
        <a href="/" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Home</a>
        <a href="" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">About</a>
        <a href="" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Menus</a>
        <a href="" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Outlets</a>
        <a href="" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Testimonial</a>
    </div>
    <button class="py-2 px-6" onclick="toggleShow()"><img src="../assets/icons/shopping-cart.svg" alt="" srcset=""></button>
</nav>

<div id="sidebar-popup" class="fixed inset-y-0 right-0 flex items-center justify-center bg-neutral-50 w-0 duration-500 overflow-hidden">
    <form action="/order/create" method="post" id="form-order" class="flex flex-col gap-4">
        @csrf
        <div class="flex flex-col gap-4">
            @foreach($menus as $menu)
            <div id="input-order" class="flex gap-4" style="display: none">
                @if (!empty($menu->image))
                    <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-12 h-12 object-cover object-center">
                @else
                    <img src="../assets/img/menu-empty.svg" class="w-12 h-12 object-cover object-centers">
                @endif
                <div>
                    <p>{{ $menu->name }}</p>
                    <input type="number" name="{{ $menu->id }}" id="order-quantity-{{ $menu->id }}" value="0" readonly class="outline-none bg-transparent">
                </div>
            </div>
            @endforeach
        </div>
        <button type="submit" id="btn-order" class="py-2 px-4 bg-primary-500 text-neutral-50 rounded-lg duration-100 hover:bg-primary-600">Order Now</button>
    </form>
</div>

<script>
    function toggleShow() {
        let sidebarPopup = document.getElementById('sidebar-popup');
        let isSidebarOpen = sidebarPopup.style.width === '0px' || sidebarPopup.style.width === '';

        if (isSidebarOpen) {
            sidebarPopup.style.width = '300px';
        } else {
            sidebarPopup.style.width = '0px';
        }
    }
</script>

