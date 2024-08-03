<div class="header fixed w-full z-[40] mb-[50px] @stack('header')">
    <div class="container">
        <div class="header-logo">
            <span class="material-icons text-red-400 !text-[50px]">
                vaccines
            </span>
            <span class="mx-2">{{ env('APP_NAME') }}</span>
        </div>
        <!-- header-logo -->
        <div class="menu-toggle">
            <span class="material-icons-outlined"> menu </span>
        </div>
        <!-- menu-toggle -->

        <ul class="header-menu">
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white rounded bg-blue-700 flex items-center" type="button">
                <span class="material-icons mx-2 text-red-500">account_circle</span>
            </button>
            <span class="text-gray-600">{{ Auth::user()->name }}</span>
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-400">Edit profile</a>
                </li>
                <li>
                    <a href="{{ url('admin/sign-out') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-400">Sign out</a>
                </li>
                </ul>
            </div>
        </ul>
        <!-- header-menu -->
    </div>
</div>
