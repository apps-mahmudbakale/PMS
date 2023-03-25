<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <!-- Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sweetalert2.min.css') }}">
    <script src="{{ asset('sweetalert.min.js') }}"></script>
    @livewireStyles
    <!-- Scripts -->
</head>

<body>
    <div>
        @yield('content')
    </div>
    <script src="{{ asset('script.js') }}"></script>
    @livewireScripts
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script>
        @if (session()->has('success'))
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session()->get('success') }}',
                showConfirmButton: true,
                timer: 2500
            })
        @elseif (session()->has('error'))
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session()->get('error') }}',
                showConfirmButton: true,
                timer: 5500
            })
        @endif
    </script>
</body>

</html>
