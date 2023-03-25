@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
       @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'Users'])
            <nav class="bg-white flex items-center p-3 text-gray-600 border border-gray-200 font-semibold">
                <a href="sales-orders.html" class="text-center mx-6">Users</a>
                
            </nav>

            <section class="p-10">
               <livewire:users />
            </section>
        </main>
    </section>
@endsection
