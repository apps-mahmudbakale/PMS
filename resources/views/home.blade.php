@extends('layouts.app')

@section('content')
<section class="flex relative pb-24">
        <aside class="w-[260px] bg-[#0F151F] h-screen fixed top-0 left-0 px-2 py-12">
            <div class="flex">
                <img src="{{ asset('assets/logo.svg') }}" alt="Home">
                <h1 class="text-white p-3">CYNOX PMS</h1>
            </div>
            <div class="text-gray-500 text-center mt-5">Technical Sales Executive</div>
            <ul class="text-[#B3B3B3] mt-20 font-sm">
                <li class=" bg-opacity-10 p-5 rounded-lg ">
                    <a href="myschedule-summary.html" class="flex items-center">
                        <img src="./assets/dashboard.svg" alt="dashboard">
                        <span class="ml-3">My Schedule</span>
                    </a>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg ">
                    <a href="sales-and-marketing-performance.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg">
                    <a href="service-delivery-leads.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Leads Management</span>
                    </a>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg">
                    <a href="account-manager.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Account Management</span>
                    </a>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg bg-white text-white">
                    <a href="sales-order.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Sales Order</span>
                    </a>
                </li>
                <li class="bg-opacity-10 p-5 rounded-lg">
                    <a href="collaboration.html" class="flex items-center">
                        <img src="./assets/network.svg" alt="">
                        <span class="ml-3">Collaboration</span>
                    </a>
                </li>
            </ul>
        </aside>
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            <header class="w-full bg-white py-7 px-10 shadow-md flex items-center justify-between sticky top-0">
                <h1 class="text-2xl font-bold">Sales Orders</h1>
                <div class="flex items-center relative">
                    <div class="relative">
                        <img src="./assets/bell.svg" alt="notifications">
                        <div
                            class="min-w-5 h-5 rounded-full p-1 bg-red-600 text-white text-xs grid place-content-center absolute -top-3 -right-2">
                            26</div>
                    </div>
                    <div class="w-10 h-10 rounded-full border-2 border-gray-400 ml-10 mr-3"></div>
                    <div class="mr-2 text-sm">Peter Rabbit</div>
                    <img src="./assets/chevron-black.svg" alt="veiw profile" class="w-3" onclick="openProfileOptions()">
                    <ul
                        class="profile-options absolute top-full right-0 capitalize bg-white border border-gray-300 rounded cursor-pointer hidden">
                        <li class="py-2 px-3 hover:bg-gray-200">
                            <a href="#" class="block w-full">profile</a>
                        </li>
                        <li class="text-red-600 py-2 px-3 hover:bg-gray-200">logout</li>
                    </ul>
                </div>
            </header>
            
            <section  class="p-10">  
                <nav class="bg-white flex items-center p-3 text-gray-600 border border-gray-200 font-semibold">
                    <a href="sales-orders.html" class="text-center text-primary mx-6 text-primary">Sales Orders</a>
                    <a href="#" class="text-center mx-6">Quotations</a>
                </nav>    


                
            </section>




        </main>
</section>
@endsection
