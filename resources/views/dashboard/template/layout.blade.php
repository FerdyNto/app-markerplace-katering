<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merchant Catering @yield('title-page')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        @include('dashboard.template.sideNavbar')

        <!-- Main content -->
        <div class="flex-1 p-6 md:p-10">
            @include('dashboard.template.header')
            @yield('content')
        </div>
    </div>

    @include('sweetalert::alert')
</body>

</html>
