<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | @yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-primary-50">
    @if ($page == 'login')
        @yield('content')
    @else
        @include('dashboard.components.navbar')
            @yield('content')
        @include('dashboard.components.footer')
    @endif
    @include('sweetalert::alert')
</body>
</html>