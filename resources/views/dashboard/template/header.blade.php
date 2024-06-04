<header class="flex justify-between items-center">
    <h2 class="text-2xl font-bold text-gray-700">Welcome, Merchant</h2>
    <div class="flex items-center space-x-4">
        <a href="{{ route('profile.merchant') }}" class="text-gray-600">{{ $profile->nama }}</a>
        {{-- <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/40" alt="User Avatar"> --}}
    </div>
</header>
