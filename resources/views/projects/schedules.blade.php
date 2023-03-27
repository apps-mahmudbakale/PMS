@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'Schedules'])
            <section class="p-10">
                Schedule Goes Here

                <div>
                    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg overflow-hidden">

                                <div class="overflow-x-auto">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead
                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-4 py-3">S/N</th>
                                                <th scope="col" class="px-4 py-3">Start Date</th>
                                                <th scope="col" class="px-4 py-3">End Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="border-b dark:border-gray-700">
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3">
                                                    <div class="w-full">
                                                        <label for="price"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start</label>
                                                        <input type="date" name="start_date" id="price"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="$2999" required="">
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <div class="w-full">
                                                        <label for="price"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End</label>
                                                        <input type="date" name="end_date" id="price"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="$2999" required="">
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                                    aria-label="Table navigation">
                                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                        Showing

                                        <span class="font-semibold text-gray-900 dark:text-white"></span>
                                        of
                                        <span class="font-semibold text-gray-900 dark:text-white"></span>
                                    </span>
                                    <ul class="inline-flex items-stretch -space-x-px">

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                </div>

            </section>
        </main>
    </section>
@endsection
