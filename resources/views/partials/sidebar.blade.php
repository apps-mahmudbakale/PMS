<aside class="w-[260px] bg-[#0F151F] h-screen fixed top-0 left-0 px-2 py-12">
    <div class="flex pl-5">
        <img src="{{ asset('assets/logo.svg') }}" alt="Home">
        <h1 class="text-white p-3">CYNOX PMS</h1>
    </div>


    <ul class="text-[#B3B3B3] mt-20 font-sm">

        <li class="p-5 rounded-lg {{ request()->is('app/dashboard') ? 'bg-white bg-opacity-10' : '' }}">
            <a href="{{ route('app.dashboard') }}" class="flex items-center">
                <img src="./assets/network.svg" alt="">
                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li
            class=" rounded {{ request()->is('app/users*') ? 'bg-white bg-opacity-10' : '' }} {{ request()->is('app/roles*') ? 'bg-white bg-opacity-10' : '' }}">
            <a type="button"
                class="flex items-center p-5 w-full font-normal text-gray-900 rounded-lg transition duration-75 group text-white cursor-pointer
                "
                aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
            </a>
            <ul id="dropdown-authentication"
                class="{{ request()->is('app/users*') && request()->is('app/roles*') ? '' : 'hidden' }}  py-2 space-y-2">
                <li class="{{ request()->is('app/users*') ? 'bg-white bg-opacity-10' : '' }}">
                    <a href="{{ route('app.users.index') }}"
                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 text-white ">
                        Users</a>
                </li>
                <li class="{{ request()->is('app/roles*') ? 'bg-white bg-opacity-10' : '' }}">
                    <a href="{{ route('app.roles.index') }}"
                        class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group text-white ">Roles</a>
                </li>

            </ul>
        </li>
        <li class="bg-opacity-10 p-5 rounded-lg text-white">
            <a href="{{ route('app.projects.index') }}" class="flex items-center">
                <img src="" alt="">
                <span class="ml-3">Project</span>
            </a>
        </li>
    </ul>

    </ul>
</aside>
