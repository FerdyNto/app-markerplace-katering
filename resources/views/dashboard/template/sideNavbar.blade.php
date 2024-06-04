<div class="w-full md:w-64 bg-indigo-700 h-screen shadow-lg">
    <div class="p-4 text-white">
        <h1 class="text-3xl font-bold">Dashboard</h1>
    </div>
    <nav class="mt-8">
        <a href="{{ route('dashboard.merchant') }}"
            class="block py-2.5 px-4 text-white font-semibold hover:bg-indigo-500">Home</a>
        <a href="#" class="block py-2.5 px-4 text-white font-semibold hover:bg-indigo-500">Orders</a>
        <a href="{{ route('menu.merchant') }}"
            class="block py-2.5 px-4 text-white font-semibold hover:bg-indigo-500">Menu</a>
        <form action="{{ route('logout') }}" method="POST" class="block pt-2.5 px-4">
            @csrf
            <button type="submit"
                class="block py-2.5 px-4 text-white font-semibold bg-red-500 hover:bg-red-700">Keluar</button>
        </form>
    </nav>
</div>
