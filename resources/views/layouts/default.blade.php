<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"/>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('admin.includes.header');
        <main class="py-4">
            <div class="mt-[80px]">
                @yield('content')
            </div>
        </main>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-validate.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
        <script>
            @if(Session::has('error'))
            $.toast({
                heading: 'error',
                icon: 'error',
                text:"{{ Session::get('error') }}",
                loader: true,
                position:'top-right',
                bgColor: '#c60909'
            })
            @elseif(Session::has('success'))
            $.toast({
                heading: 'success',
                text:"{{ Session::get('error') }}",
                icon:'success'
                position:'top-right',
                loader: true,
                bgColor: 'rgb(4, 78, 4)',
            })
            @endif
        </script>
        @stack('scripts')
    </div>
</body>

</html>
