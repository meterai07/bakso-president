<nav class="w-full py-4 px-[100px] flex items-center justify-between duration-500 bg-neutral-50 sticky top-0 z-50">
    <a href="/"><img src="../../../assets/icons/Logo-Bakso.png" alt="Logo" class="h-12 w-auto"></a>
    <div class="flex items-center gap-8">
        <a href="/admin" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Orders</a>
        <a href="/admin/menu" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Menus</a>
        <a href="/admin/categories" class="text-base font-medium text-neutral-900 hover:text-primary-500 duration-100">Categories</a>
    </div>
    <div class="flex items-center gap-12">
        <p class="text-base font-bold font-lora">Hello, {{ auth()->user()->name }} 👋</p>
        <a class="py-3 px-6 rounded-lg bg-primary-500 text-base text-center font-semibold text-neutral-50 hover:bg-primary-600 hover:duration-500" href="/admin/logout">Logout</a>
    </div>
</nav>