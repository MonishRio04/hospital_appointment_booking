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
<main class="py-4">
    <div class="mt-[80px]">
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <div  class="hover:none flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white flex justify-center">
                    <div class='flex items-center'>
                        <span class="material-icons text-red-400 !text-[50px]">
                            vaccines
                        </span>
                        <span class="mx-2 text-gray-600">{{ 'HAB' }}</span>
                    </div>
                </div>
                <form class="space-y-4 md:space-y-6" id="login-form" action="{{ url('admin/login') }}" method="POST">
                    <div>@csrf
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="javascript:void(0)" onclick="{$('#login-form').hide();$('#forget-form').show()}" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500 text-primary">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-primary">Sign in</button>
                </form>
                <form class="space-y-4 md:space-y-6"style="display:none" id="forget-form" action="{{ url('forget-password') }}" method="POST">
                    <div>@csrf
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="javascript:void(0)" onclick="{$('#login-form').show();$('#forget-form').hide()}" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500 text-primary">Login?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-primary">Send Email</button>
                </form>
            </div>
        </div>
    </div>
  </section>
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
