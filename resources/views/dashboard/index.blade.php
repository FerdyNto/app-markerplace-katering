@extends('dashboard.template.layout')
@section('title-page', 'Dashboard')
@section('content')
    <main class="mt-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800">Total Menu</h3>
                <p class="mt-2 text-3xl font-semibold text-gray-900">{{ count($menu) }}</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold text-gray-800">Total Pendapatan</h3>
                <p class="mt-2 text-3xl font-semibold text-gray-900">Rp. 1.000.000</p>
            </div>
            <!-- Additional cards can be added here -->
        </div>

    </main>
@endsection
