<div class="header fixed w-full z-[40] mb-[50px]">
    <div class="container">
        <div class="header-logo">
            {{-- <span class="material-icons-outlined">home_health</span> --}}
            {{ env('APP_NAME') }}
        </div>
        <!-- header-logo -->
        <div class="menu-toggle">
            <span class="material-icons-outlined"> menu </span>
        </div>
        <!-- menu-toggle -->

        <ul class="header-menu">
            <a href="mailto:monishd2002@gmail.com">
                <span class="material-icons mx-2 text-gray-500">email</span>
            </a>
            <a href="tel:+917339158045">
                <span class="material-icons mx-2 text-gray-500">
                    call
                    </span>
            </a>
        </ul>
        <!-- header-menu -->
    </div>
</div>
