@extends('dashboard.template.layout')

@section('title-page', 'Menu')
@section('content')
    <main class="mt-6">

        <a href="{{ route('menu.merchant.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Menu
        </a>
        <div class="relative overflow-x-auto mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Menu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3" colspan="2">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->nama_menu }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                <img src="{{ asset('img/menu/' . $item->foto) }}" alt="{{ $item->nama_menu }}"
                                    class="max-w-sm aspect-square">
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->harga }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('menu.merchant.edit', ['id' => $item->id]) }}"
                                    class="text-yellow-500 hover:text-yellow-800 font-bold">Edit</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('menu.merchant.destroy', ['id' => $item->id]) }}"
                                    class="text-red-500 hover:text-red-800 font-bold" data-confirm-delete="true">Hapus</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </main>
@endsection
