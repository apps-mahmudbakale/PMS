@extends('layouts.app')

@section('content')
    <section class="flex relative pb-24">
        @include('partials.sidebar')
        <main class="w-full min-h-screen pl-[260px] bg-[#F5F5F5]">
            @include('partials.header', ['title' => 'Schedules'])
            <section class="p-10">
          

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
                                                <th scope="col" class="px-4 py-3">Task</th>
                                                <th scope="col" class="px-4 py-3">Start Date</th>
                                                <th scope="col" class="px-4 py-3">End Date</th>
                                                <th scope="col" class="px-4 py-3">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="border-b dark:border-gray-700">
                                                <td class="px-4 py-3"></td>
                                                <td class="px-4 py-3">Kickstart Project</td>
                                                <td class="px-4 py-3">
                                                    <div class="w-full">
                                                      20/11/2022
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3">
                                                    <div class="w-full">
                                                        10/11/2022
                                                    </div>
                                                </td>
                                                <td class="px-4 py-3"><button id="defaultModalButton" data-modal-toggle="defaultModal" type="button"
                                                    class=" items-center px-3   py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Pending
                                                </button></td>
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
