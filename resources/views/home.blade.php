@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        <aside class="w-[260px] bg-[#0F151F] h-screen fixed top-0 left-0 px-2 py-12">
            <div class="flex pl-5">
                <img src="{{ asset('assets/logo.svg') }}" alt="Home">
                <h1 class="text-white p-3">CYNOX PMS</h1>
            </div>


            <ul class="text-[#B3B3B3] mt-20 font-sm">

                <li class="bg-opacity-10 p-5 rounded-lg bg-white">
                    <a href="service-delivery-leads.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a type="button"
                        class="flex items-center p-5 w-full font-normal text-gray-900 rounded-lg transition duration-75 group text-white"
                        aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                    </a>
                    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 text-white ">
                                Users</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group text-white ">Roles</a>
                        </li>

                    </ul>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg text-white">
                    <a href="service-delivery-leads.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Project</span>
                    </a>
                </li>
            </ul>

            </ul>
        </aside>
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">

            <header class="w-full bg-white py-7 px-10 shadow-md flex items-center justify-between sticky top-0">
                <h1 class="text-2xl font-bold">Sales Orders</h1>
                <div class="flex items-center relative p-5">
                    <div class="relative pr-10">

                        <div
                            class="min-w-5 h-5 rounded-full p-1 bg-red-600 text-white text-xs grid place-content-center absolute -top-6 left-20 ">
                            26
                        </div>
                    </div>
                    {{-- <div class="mr-2 text-sm">Peter Rabbit</div> --}}
                    <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-dark">
                        <img src="{{ asset('user-male-circle.png') }}" width="50" alt="">
                        {{-- {{ auth()->user()->fullname() }}</a> --}}
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
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

            <section class="p-10">
                <nav class="bg-white flex items-center p-3 text-gray-600 border border-gray-200 font-semibold">
                    <a href="sales-orders.html" class="text-center text-primary mx-6 text-primary">Sales Orders</a>
                    <a href="#" class="text-center mx-6">Quotations</a>
                </nav>



            </section>




        </main>
    </section>
@endsection
