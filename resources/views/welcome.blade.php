<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Selamat Datang di Aplikasi Marketplace Katering</title>
</head>

<body>
    <div class="container mx-auto mt-96">
        <h2 class="mb-8 text-3xl">Masuk Sebagai:</h2>
        {{-- <a href="" class="min-w-sm aspect-square bg-blue-500">Kantor (Customer)</a> --}}
        <a href="{{ route('login.merchant') }}" class="p-8 text-xl bg-slate-300 w-full">Merchant</a>
    </div>
</body>

</html>
