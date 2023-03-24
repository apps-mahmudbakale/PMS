@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
       @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header')
            <section class="p-10">
               <livewire:roles />
            </section>
        </main>
    </section>
@endsection
