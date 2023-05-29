@foreach ($menus as $menu)
<div class="rounded-2xl w-auto shadow-lg">
    @if (!@empty($menu->image))
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-[360px] h-80 rounded-t-2xl object-cover object-center"</div>
    @else
        <img src="../assets/img/menu-empty.svg" alt="" class="w-[360px] h-80 rounded-t-2xl object-cover object-center">
    @endif
    <div class="flex flex-col gap-4 p-6">
        <div>
            <h3 class="font-lora font-semibold text-2xl">{{ $menu->name }}</h3>
            <p class="text-sm">{{ $menu->description }}</p>
        </div>
        <h4 class="text-lg text-primary-500 font-semibold">Rp {{ $menu->price }}</h4>
        <a class="block py-2 px-4 bg-primary-500 text-neutral-50 text-center text-base font-semibold rounded-lg">Add Menu</a>
    </div>
</div>
@endforeach

<script>
    function change() {
        const order = document.getElementById('btn-order');
        var add = document.getElementById('btn-add');
        const display = order.style.display;

        if(display == "block") {
            order.style.display = "none";
            add.style.display = "flex"
        } else {
            add.style.display = "none";
            order.style.display = "block"
        }
    }
</script>
