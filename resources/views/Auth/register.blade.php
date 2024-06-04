@extends('Auth.template.template')

@section('title-page', 'Daftar Merchant')

@section('content')
    <div class="w-full max-w-md p-8 space-y-8 bg-white rounded-lg shadow-lg">
        <div>
            <h2 class="text-2xl font-bold text-center text-gray-900">Buat Akun Merchant Mu</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('do.register.merchant') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" name="username" type="text" required
                        class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Username">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required
                        class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Password">
                </div>
                <div>
                    <label for="confirm-password" class="sr-only">Konfirmasi Password</label>
                    <input id="confirm-password" name="confirm-password" type="password" required
                        class="relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                        placeholder="Confirm Password">
                </div>
            </div>

            <div>
                <button type="submit"
                    class="relative flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Daftar
                </button>
            </div>

            <div class="text-sm text-center">
                <p class="text-gray-600">Sudah memiliki akun merchant? <a href="{{ route('login.merchant') }}"
                        class="font-medium text-indigo-600 hover:text-indigo-500">Masuk</a></p>
            </div>
        </form>
    </div>
@endsection
