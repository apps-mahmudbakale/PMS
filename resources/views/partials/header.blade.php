<header class="w-full bg-white py-7 px-10 shadow-md flex items-center justify-between sticky top-0">
    <h1 class="text-2xl font-bold">Users</h1>
    <div class="flex items-center relative p-5">
        <div class="relative pr-10">

            <div
                class="min-w-5 h-5 rounded-full p-1 bg-red-600 text-white text-xs grid place-content-center absolute -top-9 left-20 ">
                26
            </div>
        </div>
        {{-- <div class="mr-2 text-sm">Peter Rabbit</div> --}}
        <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-dark">
            <div class="flex">
                <div>
                    <img src="{{ asset('user-male-circle.png') }}" width="50" alt="">
                </div>
                <p class="pt-3 pl-2">{{ auth()->user()->Fullname() }} </p>
            </div>
        </a>
        <!-- Dropdown menu -->
        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">My
                        Profile</a>
                </li>

                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Change
                        Password</a>
                </li>
                <li>
                    <a href="#"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                </li>
            </ul>
        </div>
        </a>
    </div>
</header>
